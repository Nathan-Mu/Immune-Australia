<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 23/4/18
 * Time: 4:21 AM
 */

class counterNumberGenerator
{
    function runQuery() {
        $resultArray = array();
        $servername = "teamkaching01.cxcv5znooklb.us-east-2.rds.amazonaws.com";
        $username = "teamkaching2018";
        $password = "teamkaching";
        $dbname = "immune";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $q1 = "select Total from Incidence_time where year = (Select max(Year) from Incidence_time)";
        $q2 = "Select Pertussis from Incidence_time where year = (Select max(Year) from Incidence_time)";
        $q3 = "select Total from Death_Rate where Entity like'Australia' and Year = (Select max(Year) from Death_Rate)";
        $q4 = "select Hepatitis_B from Death_Rate where Entity like'Australia' and Year = (Select max(Year) from Death_Rate)";
        $array = array($q1, $q2, $q3, $q4);
        $i = 0;
        foreach ($array as $q) {
            $result = $conn->query($q);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $resultArray[$i] = array_values($row)[0];
                }
                $i++;
            }
        }
        mysqli_close($conn);
        return $resultArray;
    }
}