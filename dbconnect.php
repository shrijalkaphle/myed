<?php
    session_start();
    $host = 'localhost';
    
    // username of database
    $user = 'root';
    // $user = 'karmagurung2008';

    // password of the database
    $pwd = '';
    // $pwd = '123456';

    $db = 'sampleDB';
    // $db = $_SESSION['database'];

    $conn = mysqli_connect($host,$user,$pwd,$db);

    //set time zone
    date_default_timezone_set('Asia/Kathmandu');
?>