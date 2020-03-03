<script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
<?php
    $id = $_GET['id'];
    // $id = 6;
    include "../../dbconnect.php";
    //get exam id of the exam and student addmission number
    $sql0 = "SELECT * FROM graph WHERE id = '$id'";
    $result0 = mysqli_query($conn,$sql0);
    $info = mysqli_fetch_assoc($result0);
    $examid = $info['examid'];
    $add_num = $info['addnum'];

    //extract the mask of the student with exam id and addmission number
    $sql1 = "SELECT * FROM marks WHERE addnum = '$add_num' AND examid = '$examid'";
    $result1 = mysqli_query($conn,$sql1);
?>
<div class="main-card mb-3 card">
    <div class="card-header text-center"><?php echo $examid ?> Terminal Examination Result</div>
    <button style="position:absolute; right:30px; top:10px;" onclick="editDetails()" class = "btn btn-primary"><i class="fas fa-edit"></i>&nbsp; Edit</button>
    <div class="table-responsive">
        <form action="" id="editForm" method="post">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" rowspan="2">Subject</th>
                        <th class="text-center" rowspan="2">Full Marks</th>
                        <th class="text-center" rowspan="2">Pass Marks</th>
                        <th class="text-center" colspan="2">Obtained Marks</th>
                        <th class="text-center" rowspan="2">Total</th>
                    </tr>
                    <tr>
                        <th>PR</th>
                        <th>TH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $fullMark = 0;
                        $total = 0;
                        $i=0;
                        while($data = mysqli_fetch_assoc($result1)):
                            $subid = $data['subjectid'];
                            $sqli = "SELECT * FROM course WHERE id = '$subid'";
                            $resulti = mysqli_query($conn,$sqli);
                            $row = mysqli_fetch_assoc($resulti);
                            $fullMark = $fullMark + $row['fullmark'];
                    ?>
                        <tr>
                            <td class="text-center">
                                <div><?php echo strtoupper($row['course']) ?></div>
                            </td>
                            <td class="text-center">
                                <div><?php echo $row['fullmark'] ?></div>
                            </td>
                            <td class="text-center">
                                <div><?php echo $row['fullmark']*0.32 ?></div>
                            </td>
                            <td class="text-center">
                                <div>
                                    <input type="hidden" name="mid<?php echo $i ?>" value="<?php echo $data['id'] ?>">
                                    <input type="hidden" name="subid<?php echo $i ?>" value="<?php echo $subid ?>">
                                    <input disabled type="number" class="form-control text-center" name="mark<?php echo $i ?>_pr" value="<?php echo $data['practical'] ?>" required>
                                </div>
                            </td>
                            <td class="text-center">
                                <div>
                                <input disabled type="number" class="form-control text-center" name="mark<?php echo $i ?>_th" value="<?php echo $data['theory'] ?>" reqired>
                                </div>
                            </td>
                            <td class="text-center">
                                <?php
                                    $total = $total + $data['practical'] + $data['theory'];
                                    echo $total;
                                ?>
                            </td>
                        </tr>
                    <?php
                    $i++;
                    endwhile;
                    ?>
                </tbody>
                <input type="hidden" name="subtotal" value="<?php echo $i ?>">
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-right">Total Marks</th>
                        <td colspan="2" class="text-center"><?php echo $total ?></td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-right">Percentage</th>
                        <td colspan="2" class="text-center"><?php echo ($total/$fullMark)*100?>%</td>
                    </tr>
                </tfoot>
            </table>
            <br>
            <input type="hidden" name="examid" value="<?php echo $examid ?>">
            <input type="hidden" name="grandtotal" value="<?php echo $fullMark ?>">
            <input type="hidden" name="addnum" value="<?php echo $add_num ?>">
            <button style="position:absolute; display: none; right:10px;" type="submit" name="update" id='btnShow' class='btn btn-primary'>Update</button>
        </form>
    </div>
</div>

<style>
    input[type="number"] {
        width: 60px !important;
    }
</style>

<script>
    // $("#editForm :input").prop("disabled",true);
    function editDetails() {
        document.getElementById('btnShow').style.display = 'block';
        $('input').removeAttr('disabled');
        // $('#sub2_pr').attr('disabled');
    }
</script>