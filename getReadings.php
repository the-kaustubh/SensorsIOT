<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET/POST");

include 'sqlcon.php';

$uid =  mysqli_real_escape_string($conn, $_REQUEST['uid']);
$from =  mysqli_real_escape_string($conn, $_REQUEST['from']);
$to =  mysqli_real_escape_string($conn, $_REQUEST['to']);

$query = "SELECT * FROM `$uid` WHERE `at` BETWEEN '$from' AND '$to'";

$result = mysqli_query($conn, $query);

$rows = array(mysqli_fetch_row($result));
echo json_encode($r);
mysqli_free_result($result);
mysqli_close($conn);

?>
