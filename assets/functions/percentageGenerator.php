<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 23/4/18
 * Time: 4:21 AM
 */

class percentageGenerator
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
        $q = "select Percent_Fully_Immunised from Vaccination_Rate where Reporting_Year = (Select max(Reporting_Year) from Vaccination_Rate)";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $resultArray[$i] = array_values($row)[0];
                $i++;
            }
            return $resultArray;
        }
        mysqli_close($conn);
    }
}