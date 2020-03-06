<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'sampleDB';
    // $db = $_SESSION['database'];

    $conn = mysqli_connect($host,$user,$pwd,$db);

    //set time zone
    date_default_timezone_set('Asia/Kathmandu');
?>