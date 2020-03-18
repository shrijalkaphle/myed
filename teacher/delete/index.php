<?php
    include '../../dbconnect.php';

    $id = $_GET['id'];

    echo $id;

    $sql = "SELECT * FROM teacher WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $file = "../../images/" . $row['image'];

    unlink($file);

    $sql1 = "DELETE FROM teacher WHERE id = '$id'";
    $result1 = mysqli_query($conn,$sql1);

    echo "<script>window.location.replace('../../teacher')</script>";
?>
