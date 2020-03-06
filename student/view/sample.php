<?php
    include "../../dbconnect.php";
    $addnum = 'b22';

    $query = "SELECT * FROM healthstatus WHERE addnum = '$addnum'";
    $result = mysqli_query($conn,$query);
    $i = 1;
    while($row = mysqli_fetch_assoc($result)):
    endwhile;
?>