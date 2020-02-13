<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: GET/POST");
 header("Access-Control-Allow-Headers: *");

 include 'sqlcon.php';


$uid =  mysqli_real_escape_string($conn, $_REQUEST['uid']);
$usr =  mysqli_real_escape_string($conn, $_REQUEST['user']);

 $query = "SELECT * FROM `sensor` WHERE `uid`='$uid' AND `username`='$usr'" ;

 // $result = $conn->query($query);
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) == 1){
    $query2 = "DELETE FROM `sensor` WHERE `uid`='$uid' AND `username`='$usr'" ;

    $result = mysqli_query($conn, $query2);
    $sql = "DROP TABLE `$uid`";
    // echo $sql;
    $result2 =  mysqli_query($conn, $sql);
     if($result && $result2) {
         echo $uid;
     }
  } else {
    echo 0;
  }
  mysqli_free_result($result);
  mysqli_free_result($result2);
  mysqli_close($conn);


?>
