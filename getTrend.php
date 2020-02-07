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

class respo {}
$r = new respo();
$r->rows = $result->fetch_row();
echo $result->num_rows."\n";
while($r->rows) {
  echo $r->rows[0]."\n";
  echo $r->rows[1]."\n";
  echo $r->rows[2]."\n";
  echo $r->rows[3]."\n";
  $r->rows = $result->fetch_row();
}


?>
