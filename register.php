<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");

 include 'sqlcon.php';

 $name =  mysqli_real_escape_string( $conn, $_REQUEST['name']);
 $mail =  mysqli_real_escape_string( $conn, $_REQUEST['mail']);
 $mobile =  mysqli_real_escape_string( $conn, $_REQUEST['mobile']);
 $pwd =  md5(mysqli_real_escape_string( $conn, $_REQUEST['pwd']));
 // echo $user;
 // echo $pwd;
 $query =  "INSERT into `Users`(`name`, `username`, `mail`, `mobile`, `password`) VALUES ('$name', '$name', '$mail', '$mobile', '$pwd')";
 $result = $conn->query($query);

 print_r($result);
?>
