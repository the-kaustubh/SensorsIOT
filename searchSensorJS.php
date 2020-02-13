<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");

 include 'sqlcon.php';

 $uid =  mysqli_real_escape_string( $conn, $_REQUEST['uid']);
 $user =  mysqli_real_escape_string( $conn, $_REQUEST['user']);

 $query =  "SELECT * from `sensor` where `username` = '$user' AND `uid` = '$uid' limit 1";

 $result = mysqli_query($conn, $query);

echo json_encode( mysqli_fetch_row($result));
?>
