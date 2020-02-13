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

$result = mysqli_query($conn, $query);

$rows = array(mysqli_fetch_row($result));
echo mysqli_num_rows($result)."\n";
while($rows) {
  echo $rows[0]."\n";
  echo $rows[1]."\n";
  echo $rows[2]."\n";
  echo $rows[3]."\n";
  $rows = mysqli_fetch_row($result);
}


?>
