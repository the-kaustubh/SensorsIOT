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

 $query  = "UPDATE `Sensor` SET `loc`='$loc', `co2min`='$cmin', `co2max`='$cmax'" ;
 $query .= ", `tempmin`='$tmin', `tempmax`='$tmax' WHERE `uid`='$uid' AND `username`='$usr'";

 $result = mysqli_query($conn, $query);

 if($result) {
     echo $uid.' '.$loc;
 }

?>
