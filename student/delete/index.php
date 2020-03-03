<?php
    include '../../dbconnect.php';

    $id = $_GET['id'];

    echo $id;

    $sql = "SELECT * FROM student WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $file = "../../images/" . $row['image'];
    $pid = $row['pid'];

    unlink($file);

    $sql1 = "DELETE FROM student WHERE id = '$id'";
    $result1 = mysqli_query($conn,$sql1);

    $sql2 = "SELECT * FROM student WHERE pid = '$pid'";
    $result2 = mysqli_query($conn,$sql2);
    $num = mysqli_num_rows($result2);

    if($num == 0) {
        $sql3 = "DELETE FROM guardian WHERE id = '$pid'";
        $result1 = mysqli_query($conn,$sql3);
    }

    echo "<script>window.location.replace('../../student')</script>";
?>
