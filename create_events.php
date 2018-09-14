<?php
session_start();
$host = $_SESSION['host'];

require_once('./google-calendar/google-calendar-api.php');
if (preg_match("/([a-zA-Z.])+ml/", $host)) {
    require_once "./google-calendar/settings_ml.php";
} else if (preg_match("/([a-zA-Z.])+ga/", $host)) {
    require_once "./google-calendar/setting_ga.php";
} else {
    require_once "./google-calendar/setting_local.php";
}

if (isset($_GET['code'])) {
    try {
        $capi = new GoogleCalendarApi();

        // Get the access token
        $data = $capi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);


        // Save the access token as a session variable
        $_SESSION['access_token'] = $data['access_token'];

        // Redirect to the page where user can create event
//        header('Location: home.php');
//        exit();
    } catch (Exception $e) {
        echo $e->getMessage();
        exit();
    }

    try {
        // Get event details
        //$event = $_POST['event_details'];
        $results = $_SESSION["results"];
        $name = $_SESSION['name'];

        $capi = new GoogleCalendarApi();

        foreach ($results as $value) {
            $event = array('title' => 'Immunisation date[' . $name . ']', 'event_date' => $value["Age"], 'description' => "Diseases immunisation against: ". $value["Disease"] . "\nMatters need attention: " . $value["Comments"] . "\n\n----Just a notification. Please double check with your doctor.----");
            $event_id = $capi->CreateCalendarEvent('primary', $event['title'], $event['event_date'], $event['description'], $_SESSION['access_token']);
        }
        $success = true;
        $_SESSION['status'] = true;
    }
    catch(Exception $e) {
//    header('Bad Request', true, 400);
//    echo json_encode(array( 'error' => 1, 'message' => $e->getMessage() ));
        //header("Location: bad_result.php");
        $_SESSION['status'] = false;
    }
    header("location: result.php");
}

