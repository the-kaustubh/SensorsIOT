<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET/POST");

include 'sqlcon.php';

$uid =  mysqli_real_escape_string($conn, $_REQUEST['uid']);
$query = "SELECT * FROM `$uid` order by `at` DESC LIMIT 1";

$result = $conn->query($query);

class respo {}
$r = new respo();
$r->rows = $result->fetch_row();
echo $r->rows[1]."\n";
echo $r->rows[2]."\n";
echo $r->rows[3];


?>
