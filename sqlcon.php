<?php
    define("SERVER", "localhost");
    define("username", "Sensor");
    define("password", "sensor");
    define("DB", "SensorsDB");
    // define('ROOT_DIR', 'http://first-app-of-mine.herouapp.com/');
    // define('ROOT_DIR_LOCAL', 'http://localhost/');
    
    $conn = new mysqli(SERVER, username, password, DB);
    if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
    // echo $conn;
?>