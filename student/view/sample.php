<?php
    include "../../dbconnect.php";
    echo $addnum = $_GET['addnum'];
?>
<!-- 
<link href="../../css/dashboard.css" rel="stylesheet">
<script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../../assets/scripts/main.js"></script>

<button style="position:absolute; right:250px; bottom:20px;" data-toggle="modal" data-target="#healthstatus" id="healthbtn" class = "btn btn-primary"><i class="fas fa-poll-h"></i>&nbsp; Health Status</button>

<div class="modal fade" id="healthstatus" tabindex="-1" role="dialog" aria-labelledby="healthstatusTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="healthstatusTitle">Health Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2>History</h2>
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sick Note</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM healthstatus WHERE addnum = '$addnum'";
                            $result = mysqli_query($conn,$query);
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result)):
                                $id = $row['id'];
                                date_default_timezone_set('Asia/Kathmandu');
                                $today = strtotime(date('Y-m-d H:i:s'));
                                $updateDate = strtotime($row['updatedate']);

                                $diff = abs($today - $updateDate);
                                $days = floor(($diff/ (60*60*24))); 
                                
                                if($days > 30 && $row['isSick'] == 0) {
                                    if($row['status'] == 1) {
                                        $query = "UPDATE healthstatus SET status = '0'";
                                        mysqli_query($conn,$query);
                                    }
                                }

                        ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['note'] ?></td>
                            <?php
                                    if($row['isSick'] == 1) {
                                ?>
                                    <td style="background-color:#B81F44; color: white" class="text-center"><b>Sick</b></td>
                                <?php
                                    } else if ($row['isSick'] == 0 && $row['status'] == 1) {
                                ?>
                                    <td style="background-color:#EC971F; color: white" class="text-center"><b>Recovered</b></td>
                                <?php
                                    } else {
                                ?>
                                    <td style="background-color:#4CAF50; color: white" class="text-center"><b>Healthy</b></td>
                                <?php
                                    }
                                ?>
                            <td>
                                <?php
                                    if($row['status'] == 1) {
                                        if($row['isSick'] == 1) {
                                ?>
                                    <form method="post">
                                        <input type="hidden" name="hid" value="<?php echo $row['id'] ?>">
                                        <button type="submit" name="recovered" class="btn btn-warning">Set as Recovered</button>
                                    </form>
                                <?php
                                        } else {
                                ?>
                                    <form method="post">
                                        <input type="hidden" name="hid" value="<?php echo $row['id'] ?>">
                                        <button type="submit" name="sick" class="btn btn-danger">Set as Sick</button>
                                    </form>
                                <?php
                                        }
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                                $i++;
                            endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>document.getElementById('healthbtn').click();</script> -->