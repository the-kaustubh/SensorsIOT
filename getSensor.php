<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");

 include 'sqlcon.php';

 $user =  mysqli_real_escape_string( $conn, $_REQUEST['user']);
 // echo $user;
 if(strcmp($user, "Admin")) {
   $query =  "SELECT * from `Sensor` where `username` like '$user' order by `uid`";
 } else {
   $query =  "SELECT * from `Sensor` order by `uid`";
 }

 // echo $query;
 // echo $query.'<br';
 $result = mysqli_query($conn, $query);

 // echo json_encode($r);
 echo mysqli_num_rows($result)."\n";
 for($i = 0 ; $i < $result->num_rows; $i++) {
   $rows = mysqli_fetch_row($result);

   foreach ($rows as $key) {
     echo $key."\n";
   }
 }
?>
