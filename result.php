<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Status</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
    $status = null;
    session_start();
    try {
        $status = $_SESSION['status'];
    }
    catch (Exception $e) {
        header("location: to_immunise.php");
    }

    if ($status == true) {
        echo "<p>Success. You will be back in 5 seconds...</p>
    <p>If it doesn't work, click <a href=\"to_immunise.php\">here</a>.</p>";
    } else {
        echo "<p>Failed to create events. You will be back in 5 seconds...</p>
    <p>If it doesn't work, click <a href=\"to_immunise.php\">here</a>.</p>";
    }

?>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/functions/delay_back.js"></script>
</body>
</html>
<?php session_unset();
session_destroy();?>