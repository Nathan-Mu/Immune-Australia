<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 7/5/18
 * Time: 8:33 AM
 */

session_start();
header('Content-type: application/json');

function runQuery($sql) {
    $servername = "teamkaching01.cxcv5znooklb.us-east-2.rds.amazonaws.com";
    $username = "teamkaching2018";
    $password = "teamkaching";
    $dbname = "immune";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($sql);
    mysqli_close($conn);
    return $result;
}

function getYear($date) {
    return date('Y',strtotime($date));
}

function getMonth($date) {
    return date('m', strtotime($date));
}

function getDay($date) {
    return date('d', strtotime($date));
}

function getAge($year, $month, $day) {
    $y = date('Y') - $year;
    $m = date('m') - $month;
    $d = date('d') - $day;
    if ($d > 0) {
        return $y * 12 + $m + 0.1;
    }
    else if ($d = 0){
        return $y * 12 + $m;
    }
    else
    {
        return $y * 12 + $m - 1;
    }
}

try {
    $results = array();
    $birthday = $_POST['birthday'];
    //$birthday= "2018-05-07";
    $age = getAge(getYear($birthday), getMonth($birthday), getDay($birthday));
    $result = runQuery("select Age,Disease, Mode_Of_Delivery, Vaccine, Comments from NIP_Schedule where Age >= " . $age . " order by Age");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //var_dump($row);
            $date = date("Y-m-d", strtotime('+' . $row['Age'] . ' months', strtotime($birthday)));
            //var_dump($date);
            $row["Age"] = $date;
            $results[] = $row;
        }
    }
    $_SESSION['results'] = $results;
    echo json_encode(["resultList" => $results]);
}
catch (Exception $e) {
    header('Bad Request', true, 400);
    echo json_encode(array( 'error' => 1, 'message' => $e->getMessage() ));
}