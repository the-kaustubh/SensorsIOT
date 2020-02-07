<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");

 include 'sqlcon.php';

 $mail =  mysqli_real_escape_string( $conn, $_REQUEST['mail']);
 $pwd =  md5(mysqli_real_escape_string( $conn, $_REQUEST['pwd']));
 // echo $user;
 $query =  "SELECT * from `Users` where `mail` = '$mail' and `password`='$pwd'";

 $result = $conn->query($query);

 class respo {}
 $r = new respo();
 if($result->num_rows == 1 ) {
   echo $result->fetch_row()[1];
 }
?>
