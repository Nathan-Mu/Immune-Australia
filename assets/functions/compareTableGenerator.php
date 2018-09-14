<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 22/4/18
 * Time: 2:14 PM
 */

class compareTableGenerator
{

    function getDifferences($date, $iso)
    {
        $year = $this->getYear($date);
        $month = $this->getMonth($date);
        $day = $this->getDay($date);
        $html = '';
        $age = $this->getAge($year, $month, $day);
        $sql = $this->getQuery2($iso, $age);
        $result = $this->runQuery($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $string = '';
                $date = '';
                $desc = $row['Vaccine_desc'];
                $dose1 = $row['Dose_1'];
                $dose2 = $row['Dose_2'];
                $dose3 = $row['Dose_3'];
                $dose4 = $row['Dose_4'];
                $dose5 = $row['Dose_5'];
                $dose6 = $row['Dose_6'];
                $doses = array($dose1, $dose2, $dose3, $dose4, $dose5, $dose6);
                foreach ($doses as $dose) {
                    if ($dose >= 0 && $dose <= $age) {
                        $date .= $this->getVaccineDate($year, $month, $dose) . ", ";
                        if ($dose == 0) {
                            $string .= "birth, ";
                        } else {
                            if ($dose <= 24) {
                                if ($dose == 1) {
                                    $string .= $dose . ' month, ';
                                } else {
                                    $string .= $dose . ' months, ';
                                }
                            } else {
                                $y = floor($dose / 12);
                                $string .= $y . ' years, ';
                            }
                        }
                    }
                }
                $string = substr($string, 0, strlen($string) - 2);
                $date = substr($date, 0, strlen($date) - 2);
                $html .= "<tr><td>" . $string . "</td><td>" .
                    $desc . "</td><td>" . $date . "</td></tr>";

            }
        }
        return $html;

    }

    function getSimilarity($date, $iso)
    {
        $year = $this->getYear($date);
        $month = $this->getMonth($date);
        $day = $this->getDay($date);
        $html = '';
        $age = $this->getAge($year, $month, $day);
        $sql = $this->getQuery($iso, $age);
        $result = $this->runQuery($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $string = '';
                $date = '';
                $desc = $row['Vaccine_desc'];
                $dose1 = $row['Dose_1'];
                $dose2 = $row['Dose_2'];
                $dose3 = $row['Dose_3'];
                $dose4 = $row['Dose_4'];
                $dose5 = $row['Dose_5'];
                $dose6 = $row['Dose_6'];
                $doses = array($dose1, $dose2, $dose3, $dose4, $dose5, $dose6);
                foreach ($doses as $dose) {
                    if ($dose >= 0 && $dose <= $age) {
                        $date .= $this->getVaccineDate($year, $month, $dose) . ", ";
                        if ($dose == 0) {
                            $string .= "birth, ";
                        } else {
                            if ($dose <= 24) {
                                if ($dose == 1) {
                                    $string .= $dose . ' month, ';
                                } else {
                                    $string .= $dose . ' months, ';
                                }
                            } else {
                                $y = floor($dose / 12);
                                $string .= $y . ' years, ';
                            }
                        }
                    }
                }
                $string = substr($string, 0, strlen($string) - 2);
                $date = substr($date, 0, strlen($date) - 2);
                $html .= "<tr><td>" . $string . "</td><td>" .
                    $desc . "</td><td>" . $date . "</td></tr>";

            }
        }
        return $html;

    }

    function runQuery($sql)
    {
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

    function getQuery($iso, $age)
    {
//        return "select Vaccine_desc,Dose_1,Dose_2,Dose_3,Dose_4,Dose_5,Dose_6  from Schedule where iso_code like '"
//            . $iso ."' and Dose_1 <= " . $age . " and Vaccine_code in( select Vaccine_code from Schedule where iso_code
//            like 'AUS' and Dose_1 <= " . $age . ") order by Dose_1, Dose_2, Dose_3, Dose_4, Dose_5, Dose_6";

        return "select v.Vacc_name as Vaccine_desc,Dose_1 as Dose_1,vs.Dose_2 as Dose_2,vs.Dose_3 as Dose_3,
            vs.Dose_4 as Dose_4,vs.Dose_5 as Dose_5,vs.Dose_6 as Dose_6 from Vaccine_Schedule vs join 
            Vaccine v on (vs.Vacc_code = v.Vacc_code) where vs.ISO_code = '" . $iso . "' and vs.Dose_1 <= " . $age . " 
            and vs.Vacc_code in(select Vacc_code from Vaccine_Schedule where ISO_code like 'AUS' and Dose_1 <= " . $age .
            ") order by Dose_1, Dose_2, Dose_3, Dose_4, Dose_5, Dose_6";

    }

    function getQuery2($iso, $age)
    {
//        return "select Country, Vaccine_code,Vaccine_desc, iso_code,Dose_1,Dose_2,Dose_3,Dose_4,Dose_5,Dose_6
//            from Schedule where iso_code like 'AUS' and Dose_1 <= " . $age . " and Vaccine_code not in( select
//            Vaccine_code from Schedule where iso_code like '" . $iso . "' and Dose_1 <= " . $age . ") order by Dose_1, Dose_2, Dose_3, Dose_4, Dose_5, Dose_6";
        return "select Country, Vaccine_code,Vaccine_desc, iso_code,Dose_1,Dose_2,Dose_3,Dose_4,Dose_5,Dose_6  
            from Schedule where iso_code like 'AUS' and Dose_1 <= " . $age . " and Vaccine_code 
            not in( select Vaccine_code from Schedule where iso_code like '" . $iso . "' and 
            Dose_1 <= " . $age . ") order by Dose_1, Dose_2, Dose_3, Dose_4, Dose_5, Dose_6";
    }

    function getAge($year, $month, $day)
    {
        $y = date('Y') - $year;
        $m = date('m') - $month;
        $d = date('d') - $day;
        if ($d > 0) {
            return $y * 12 + $m;
        } else {
            return $y * 12 + $m - 1;
        }
    }

    function getVaccineDate($year, $month, $duration)
    {

        $year = floor(($month + $duration - 1) / 12) + $year;
        $month = ($month + $duration - 1) % 12 + 1;
        if ($month < 10) {
            $month = "0" . $month;
        }
        return $year . "-" . $month;
    }

    function getYear($date)
    {
        return date('Y', strtotime($date));
    }

    function getMonth($date)
    {
        return date('m', strtotime($date));
    }

    function getDay($date)
    {
        return date('d', strtotime($date));
    }
}