<?php
    define("SERVER", "localhost");
    define("username", "root");
    define("password", "");
    define("DB", "SensorsDB");
    // define('ROOT_DIR', 'http://first-app-of-mine.herouapp.com/');
    // define('ROOT_DIR_LOCAL', 'http://localhost/');

    $conn = mysqli_connect(SERVER, username, password, DB);
    if (!$conn) {
    die('Connect Error ');
    }
    // echo $conn;
?>
