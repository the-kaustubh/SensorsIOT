<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");
 header("Access-Control-Allow-Headers: *");

 include 'sqlcon.php';


$uid =  mysqli_real_escape_string($conn, $_REQUEST['uid']);
$usr =  mysqli_real_escape_string($conn, $_REQUEST['user']);

 $query = "SELECT * FROM `Sensor` WHERE `uid`='$uid' AND `username`='$usr'" ;

 $result = $conn->query($query);
  if($result->num_rows == 1){
    $query2 = "DELETE FROM `Sensor` WHERE `uid`='$uid' AND `username`='$usr'" ;

    $result = $conn->query($query2);
    $sql = "DROP TABLE `$uid`";
    // echo $sql;
    $result2 = $conn->query($sql);
     if($result && $result2) {
         echo $uid;
     }
  } else {
    echo 0;
  }


?>
