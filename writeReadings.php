<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET/POST");

include 'sqlcon.php';

$uid =  mysqli_real_escape_string( $conn, $_REQUEST['uid']);
$temp =  mysqli_real_escape_string($conn, $_REQUEST['temp']);
$hum =  mysqli_real_escape_string( $conn, $_REQUEST['hum']);
$co2 =  mysqli_real_escape_string(  $conn, $_REQUEST['co2']);

$query = "INSERT INTO `$uid`(`temperature`, `humidity`, `co2`) VALUES ('$temp', '$hum', '$co2')";

// echo $query;
$result = mysqli_query($conn, $query);
?>
