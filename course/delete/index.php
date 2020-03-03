<?php
    include '../../dbconnect.php';

    $id = $_GET['id'];

    $sql1 = "DELETE FROM course WHERE id = '$id'";
    $result1 = mysqli_query($conn,$sql1);

    echo "<script>window.location.replace('../../course')</script>";
?>
