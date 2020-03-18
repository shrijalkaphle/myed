<?php
    include "../dbconnect.php";
    $addnum = $_GET['addnum'];
    $grade = $_GET['grade'];
?>

<div class="main-card mb-3 card">
    <div class="card-header">All Student List</div>
    <div class="table-responsive">
        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Addmission Number</th>
                    <th class="text-center">Addmission Date</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Contact</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($grade != '0') {
                    $grade = "%" . strtoupper($_GET['grade']) . "%";
                    
                    $sql = "SELECT * FROM student WHERE grade LIKE '$grade'";
                    $result = mysqli_query($conn, $sql);
                } else {
                    $sql = "SELECT * FROM student";
                    $result = mysqli_query($conn, $sql);
                }
                
                if($grade == '0' && $addnum != '') {
                    $addnum = "%" . strtoupper($_GET['addnum']) . "%";
                    
                    $sql = "SELECT * FROM student WHERE addnum LIKE '$addnum'";
                    $result = mysqli_query($conn, $sql);
                }
                
                if($grade != '0' && $addnum != '') {
                    $addnum = "%". strtoupper($_GET['addnum']) . "%";
                    $grade = "%" . strtoupper($_GET['grade']) . "%";
                    
                    $sql = "SELECT * FROM student WHERE grade LIKE '$grade' AND addnum LIKE '$addnum'";
                    $result = mysqli_query($conn, $sql);
                }
                while ($row = mysqli_fetch_assoc($result)) :
                    $pid = $row['pid'];
                    $sql2 = "SELECT * FROM guardian WHERE id ='$pid'";
                    $result2 = mysqli_query($conn, $sql2);
                    $details = mysqli_fetch_assoc($result2);
                ?>
                    <tr>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="42" class="rounded-circle" src="../images/<?php echo $row['image'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading"><?php echo $row['name'] ?></div>
                                        <div class="widget-subheading opacity-7">Grade : <?php echo $row['grade'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <div><?php echo $row['addnum'] ?></div>
                        </td>
                        <td class="text-center">
                            <div><?php echo $row['doj'] ?></div>
                        </td>
                        <td class="text-center">
                            <div><?php echo $row['currentaddress'] ?></div>
                        </td>
                        <td class="text-center">
                            <div><?php echo $details['guardiannum'] ?></div>
                        </td>
                        <td class="text-center">
                            <a href="view/<?php echo $row['id']; ?>"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button></a>
                            <a href="delete/<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');"><button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Delete</button></a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>