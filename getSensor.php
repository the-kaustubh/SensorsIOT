<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");

 include 'sqlcon.php';

 $user =  mysqli_real_escape_string( $conn, $_REQUEST['user']);
 // echo $user;
 if(strcmp($user, "Admin")) {
   $query =  "SELECT * from `sensor` where `username` like '$user' order by `uid`";
 } else {
   $query =  "SELECT * from `sensor` order by `uid`";
 }

 // echo $query;
 // echo $query.'<br';
 $result = mysqli_query($conn, $query);
 $len = mysqli_num_rows($result);
 // echo json_encode($r);
 echo $len."\n";
 for($i = 0 ; $i < $len; $i++) {
   $rows = mysqli_fetch_row($result);

   foreach ($rows as $key) {
     echo $key."\n";
   }
 }
?>
