<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");
 header("Access-Control-Allow-Headers: *");

 include 'sqlcon.php';


$uid =  mysqli_real_escape_string($conn, $_REQUEST['uid']);
$loc =  mysqli_real_escape_string($conn, $_REQUEST['loc']);
$cmin =  mysqli_real_escape_string($conn, $_REQUEST['cmin']);
$cmax =  mysqli_real_escape_string($conn, $_REQUEST['cmax']);
$tmin =  mysqli_real_escape_string($conn, $_REQUEST['tmin']);
$tmax =  mysqli_real_escape_string($conn, $_REQUEST['tmax']);
$usr =  mysqli_real_escape_string($conn, $_REQUEST['usr']);
$mac =  mysqli_real_escape_string($conn, $_REQUEST['mac']);

 $query = "INSERT INTO `Sensor`(`uid`, `loc`, `co2min`, `co2max`, `tempmin`, `tempmax`, `username`, `machinename`) values ('$uid', '$loc', '$cmin', '$cmax', '$tmin', '$tmax', '$usr', '$mac')" ;

 $result = mysqli_query($conn, $query);

$sql = "CREATE TABLE `$uid` (
        `at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `temperature` double NOT NULL,
        `co2`  double NOT NULL,
        `humidity` double NOT NULL)";
        mysqli_query($conn, $sql);

 if($result) {
     echo $uid.' '.$loc;
 }

?>
