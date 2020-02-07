<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET/POST");

include 'sqlcon.php';

$uid   =  mysqli_real_escape_string($conn, $_REQUEST['uid']);
$user  =  mysqli_real_escape_string($conn, $_REQUEST['user']);
// $from  =  mysqli_real_escape_string($conn, $_REQUEST['from']);
// $to    =  mysqli_real_escape_string($conn, $_REQUEST['to']);

$query = "SELECT * FROM `$uid`";

$result = $conn->query($query);

$r = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($r);

?>
