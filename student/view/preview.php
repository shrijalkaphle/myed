<?php 
    include '../../dbconnect.php';
    $id = $_GET['id'];
    
    $uid = $_SESSION['id'];
    $sql = "SELECT * FROM user WHERE id = '$uid'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);

    //logo and border
    $logo = $data['logo'];
    $bdr = $data['border'];
    // $bdr = "border/border.png";

    // find which exam does this marks belongs to
    $sql0 = "SELECT * FROM graph WHERE id = '$id'";
    $result0 = mysqli_query($conn,$sql0);
    $info = mysqli_fetch_assoc($result0);
    $examid = $info['examid'];
    $add_num = $info['addnum'];

    //student details
    $std = "SELECT * FROM student WHERE addnum = '$add_num'";
    $stdresult = mysqli_query($conn,$std);
    $stdInfo = mysqli_fetch_assoc($stdresult);

    //extract marks of the exam
    $sql1 = "SELECT * FROM marks WHERE addnum = '$add_num' AND examid = '$examid'";
    $result1 = mysqli_query($conn,$sql1);
    // $marks = mysqli_fetch_assoc($result1);

    function subjectName($val) {
        return $val;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>
<body>
    <div id="content" class="borderSample">
        <div class="container-fluid result">
            <img src="../../images/<?php echo $logo ?>" class="logo" height="100px" width="100px" alt="school logo">
            <div>
                <center>
                    <p style="font: 20px solid black; width: 70%;">
                        <?php echo $data['schoolname'] ?>
                        <br>
                        school address, Kathmandu
                        <br>
                        Nepal
                        <br>
                    </p>
                </center>
                <div style="float: right;">
                    reg. no: 123456789
                </div>
            </div>
            <br><br><br>
            <center>
                <p style="font: 42px solid black;">
                    Examination Result Certificate
                </p>
            </center>
            <br>
            <center>
                <p style="font: 32px solid black;">
                    MARK-SHEET
                </p>
            </center>
            <br>
            <p style="padding: 20px;">
                <i>
                    The MArks Secured by <b>...<?php echo $stdInfo['name'] ?>...</b> of class <b>...<?php echo $stdInfo['grade'] ?>...</b>
                    with <b>...<?php echo $add_num ?>...</b> addmission number
                    in <b>...<?php echo $examid ?>...</b> terminal examination are given below
                </i>
            </p>
            <br>
            <table id="resultTable" style="width: 100%; border: 1px solid black;">
                <thead class="markshead" align="center">
                    <tr>
                        <th rowspan="2">#</th>
                        <th colspan="6" rowspan="2">subjects</th>
                        <th rowspan="2">full marks</th>
                        <th rowspan="2">pass marks</th>
                        <th colspan="2">obtained marks</th>
                        <th rowspan="2">total</th>
                        <th rowspan="2">remark</th>
                    </tr>
                    <tr>
                        <td><b>pr</b></td>
                        <td><b>th</b></td>
                    </tr>
                </thead>
                <tbody align="center" class="markscontent">
                    <?php 
                        $fullMark = 0;
                        $i = 1;
                        $total = 0;
                        while($marks = mysqli_fetch_assoc($result1)):
                            $subid = $marks['subjectid'];
                            $sqli = "SELECT * FROM course WHERE id = '$subid'";
                            $resulti = mysqli_query($conn,$sqli);
                            $row0 = mysqli_fetch_assoc($resulti);
                            $fullMark = $fullMark + $row0['fullmark'];
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td colspan="6" style="padding-left: 10px;" align="left"><?php echo $row0['course'] ?></td>
                        <td><?php echo $row0['fullmark'] ?></td>
                        <td><?php echo (0.32 * $row0['fullmark']) ?></td>
                        <td><?php if($marks['practical'] == 0) { echo '-'; } else { echo $marks['practical']; } ?></td>
                        <td><?php echo $marks['theory'] ?></td>
                        <td><?php echo $marks['practical'] + $marks['theory'] ?></td>
                        <?php $total = $total + $marks['practical'] + $marks['theory'] ?>
                        <td>
                            <?php
                                if($row0['practical'] == 0) {
                                    if($marks['theory'] <((0.32*$row0['theory']))) {
                                        echo 'F';
                                    }
                                } else {
                                    if($marks['practical'] < (0.32*$row0['practical']) || $marks['theory'] <((0.32*$row0['theory']))) {
                                        echo 'F';
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <?php
                            $i++;
                        endwhile;
                    ?>
                    <tr>
                        <td></td>
                        <td colspan="6" style="padding-left: 10px;" align="left"><div id="spacer"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot align="center">
                    <tr>
                        <th colspan="3">full marks</th>
                        <th>1st div <br>with distn</th>
                        <th>1st div</th>
                        <th>2nd div</th>
                        <th>3rd div</th>
                        <th colspan="6" rowspan="2" style="padding-left: 1px;">
                            <table style="width: 100%;">
                                <tr>
                                    <td align="right" style="width: 200px;">grand total</td>
                                    <td align="center"><?php echo $total ?></td>
                                </tr>
                                <tr>
                                    <td align="right" style="width: 200px;">Percentage</td>
                                    <td align="center">
                                        <?php
                                            $percent = ($total / $fullMark)*100;
                                            echo number_format((float)$percent, 2, '.', '') . "%";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right" style="width: 200px;">result</td>
                                    <td align="center">
                                        <?php
                                            if($total >= $fullMark*0.8) {
                                                echo "Distinction";
                                            } else if ($total >= $fullMark*0.6) {
                                                echo "First Division";
                                            } else if ($total >= $fullMark*0.45) {
                                                echo "Second Division";
                                            } else if ($total >= $fullMark*0.32) {
                                                echo "Third Division";
                                            } else {
                                                echo "Failed";
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3"><?php echo $fullMark ?></th>
                        <th><?php echo ($fullMark * 0.8) ?></th>
                        <th><?php echo $fullMark*0.6 ?></th>
                        <th><?php echo $fullMark*0.45 ?></th>
                        <th><?php echo $fullMark*0.32 ?></th>
                    </tr>
                </tfoot>
            </table>

            <div style="padding-top: 50px;">
                remark meaning
                <ul style="text-transform: none;">
                    <li>
                        F - Failed
                    </li>
                    <li>
                        A - Absent
                    </li>
                </ul>
            </div>
            <br><br><br><br>
            <div>
                <div style="display: inline-block; padding-left: 25px;">
                    <center>
                        _______________________________
                        <br>
                        <b>Class teacher's <br> signature</b>
                    </center>
                </div>
                <div style="padding-right: 25px;float:right">
                    <center>
                        _______________________________
                        <br>
                        <b>principal's <br> signature</b>
                    </center>
                </div>
            </div>

        </div>
    </div>
</body>
</html>

<style>
    .logo {
        float: left;
    }

    .result {
        border: 40px solid;
        border-image: url('../../images/<?php echo $bdr ?>') 40 round;
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;

    }

    .borderSample {
        content:'';
        background-image: url('../../images/<?php echo $logo ?>');
        background-repeat: repeat;
        width:100%;
        height:100%;
        text-transform: uppercase;
    }
    @page {
        size: A4;
        margin: 0.4cm;
    }
    @media print {
        .title-container {
        /* width: 360px; */
        float: left;
    }

    .details-container {
        width: 300px;
        float: right;
    }
    }
    * {
        -webkit-print-color-adjust: exact !important;
    }
    table>thead>tr>th,table>thead>tr>td,table>tfoot>tr>th  {
        border: 1px solid black;
    }
    .markscontent>tr>td {
        border-right: 1px solid black;
    }
    .markshead>tr>th:first-child,
    .markscontent>tr>td:first-child {
        width: 30px;
        min-width: 30px;
        max-width: 30px;
        word-break: break-all;
    }

    .spacing {
        padding-left: 200px;
        display: inline;
        border: 1px solid;
        text-align: center;
        right: 0;
    }
    #spacer {
        height: 10px;
    }

    tfoot tr td {
        white-space: nowrap;
    }
</style>

<script>
    function fixedTableSize() {
        var table = document.getElementById('resultTable').offsetHeight;
        if(table < 550) {
            var spacing = 550 - table;
            document.getElementById('spacer').setAttribute("style","height:"+spacing+"px");
            // alert(document.getElementById('spacer').style.height);
        }
    }
    // window.onload=fixedTableSize;
</script>