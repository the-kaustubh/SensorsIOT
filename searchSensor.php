<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");

 include 'sqlcon.php';

 $uid =  mysqli_real_escape_string( $conn, $_REQUEST['uid']);
 $user =  mysqli_real_escape_string( $conn, $_REQUEST['user']);

 $query =  "SELECT * from `Sensor` where `username` = '$user' AND `uid` = '$uid' limit 1";

 $result = mysqli_query($conn, $query);
 $len = mysqli_num_rows($result);
 for($i = 0 ; $i < $len; $i++) {
   $rows = mysqli_fetch_row($result);

   foreach ($rows as $key) {
     echo $key."\n";
   }
 }
?>
