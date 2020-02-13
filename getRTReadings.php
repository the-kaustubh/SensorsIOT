<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET/POST");

include 'sqlcon.php';

$uid =  mysqli_real_escape_string($conn, $_REQUEST['uid']);
$query = "SELECT * FROM `$uid` order by `at` DESC LIMIT 1";

$result = mysqli_query($conn, $query);

$rows = mysqli_fetch_row($result);
$rows[1]."\n";
$rows[2]."\n";
$rows[3];


?>
