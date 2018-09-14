<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 7/5/18
 * Time: 9:25 PM
 */
session_start();
header('Content-type: application/json');
try {
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    echo json_encode(array('status' => 'success'));
}
catch (Exception $e) {
    header('Bad Request', true, 400);
    echo json_encode(array( 'error' => 1, 'message' => $e->getMessage() ));
}