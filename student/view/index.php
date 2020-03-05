<?php
    include "../../dbconnect.php";
    
    //check if user is still login or not
    if(!$_SESSION['id']) {
        header('location: ../../home');
    }

    //variable to display different error messages
    $msg = '';
    $err = '';

    //update function
    if(isset($_POST['update'])) {
        $subtotal = $_POST['subtotal'];
        $addnum = $_POST['addnum'];
        $examid = $_POST['examid'];
        $grandtotal = $_POST['grandtotal'];

        $total = 0;
        $flag = 0;

        for($i=0;$i<$subtotal;$i++) {
            $sid = $_POST['subid'.$i];
            $mid = $_POST['mid'.$i];
            $practical = $_POST['mark'.$i.'_pr'];
            $theory = $_POST['mark'.$i.'_th'];

            $total =  $practical + $theory + $total;

            //update query
            $query = "UPDATE marks SET practical = '$practical', theory = '$theory', subjectid = '$sid' WHERE id = '$mid' AND addnum = '$addnum'";
            $result = mysqli_query($conn,$query);
            if(!$result) {
                $flag = 1;
            }

            if($flag == 0) {
                $perc = ($total/$grandtotal)*100;
                $query = "UPDATE graph SET percent = '$perc' WHERE examid = '$examid' AND addnum = '$addnum'";
                $result = mysqli_query($conn,$query);
            }
        }


    }
    
    $id = $_GET['id'];
    
    $uid = $_SESSION['id'];

    $sql = "SELECT * FROM user WHERE id = '$uid'";
    $result = mysqli_query($conn,$sql);

    $data = mysqli_fetch_assoc($result);

    $sql1 = "SELECT * FROM student WHERE id = '$id'";
    $result1 = mysqli_query($conn,$sql1);
    $std = mysqli_fetch_assoc($result1);

    $addnum = $std['addnum'];
    $gid = $std['pid'];

    $sql2 = "SELECT * FROM guardian WHERE id = '$gid'";
    $result2 = mysqli_query($conn,$sql2);
    $parent = mysqli_fetch_assoc($result2);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MYED | Student Detail</title>
    <link rel="icon" type="image/png" href="../../images/icons/myed.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
    <link href="../../css/dashboard.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
</head>
<body id="allcontant">
    <input type="hidden" id="stdid" value="<?php echo $id ?>">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                            <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php echo $data['schoolname'] ?> &nbsp;
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <?php
                                                if($data['logo'] == '') {
                                            ?>
                                                <img width="42" class="rounded-circle" src="../../images/schoolLogo/default.png" alt="">
                                            <?php
                                                } else {
                                            ?>
                                                <img width="42" class="rounded-circle" src="../../images/<?php echo $data['logo'] ?>" alt="">
                                            <?php
                                                }
                                            ?>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="../../user"><button type="button" tabindex="0" class="dropdown-item">Profile</button></a>
                                            <a href="../../user/logout"><button type="button" tabindex="0" class="dropdown-item">Logout</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading" style="padding-top: 25px !important;">School Management</li>
                                <li style="padding-top: 15px !important;">
                                    <a href="../../dashboard">
                                    <i class="metismenu-icon fas fa-tachometer-alt"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li style="padding-top: 15px !important;">
                                    <a href="#"  class="mm-active">
                                    <i class="metismenu-icon fas fa-user-graduate"></i>
                                        Students
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="../../student/add">
                                                <i class="metismenu-icon"></i>
                                                Add Student
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../student">
                                                <i class="metismenu-icon">
                                                </i>View Student
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li style="padding-top: 15px !important;">
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-file-alt"></i>
                                        Exam
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="../../marks/add">
                                                <i class="metismenu-icon"></i>
                                                Insert Marks
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li style="padding-top: 15px !important;">
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-comments"></i>
                                        CounselAI
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                </li>
                                <!-- <li style="padding-top: 15px !important;">
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-chalkboard-teacher"></i>
                                        Teacher
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="components-tabs.html">
                                                <i class="metismenu-icon"></i>
                                                Add Teacher
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-accordions.html">
                                                <i class="metismenu-icon"></i>
                                                View Teacher
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li style="padding-top: 15px !important;">
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-book"></i>
                                        Courses
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="../../course/add">
                                                <i class="metismenu-icon"></i>
                                                Add Courses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../course">
                                                <i class="metismenu-icon"></i>
                                                View Courses
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-md-6">
                                <center><img width="200" height="200" class="rounded-circle avatar" src="../../images/<?php echo $std['image'] ?>" alt=""></center>
                                
                                <div style="padding-left:20px; font-size:20px">
                                    <br>
                                    <center>
                                        <table style="width:70%">
                                            <tr>
                                                <td>Full Name </td>
                                                <td> &nbsp;<?php echo $std['name'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Addmission Number </td>
                                                <td> &nbsp;<?php echo $std['addnum'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Addmission Date </td>
                                                <td> &nbsp;<?php echo $std['doj'] ?></td>
                                            </tr>
                                        </table>
                                    </center>
                                    <div class="divider"></div>
                                    <button style="position:absolute; right:250px; bottom:20px;" data-toggle="modal" data-target="#healthstatus" class = "btn btn-primary"><i class="fas fa-poll-h"></i>&nbsp; Health Status</button>
                                    <button style="position:absolute; right:120px; bottom:20px;" data-toggle="modal" data-target="#resultView" class = "btn btn-primary"><i class="fas fa-poll-h"></i>&nbsp; View Marks</button>
                                    <a href="../edit/<?php echo $id ?>"><button style="position:absolute; right:30px; bottom:20px;" class = "btn btn-primary"><i class="fas fa-edit"></i>&nbsp; Edit</button></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="chart" style ="height:400px;width:600px;float:right;" id="curve_chart"></div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row bodyFont">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-center">Personal Information</h3>
                                        <hr>
                                        <center>
                                            <table style="width: 70%">
                                                <tr>
                                                    <td>Full Name </td>
                                                    <td> &nbsp;<?php echo $std['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Addmission Number </td>
                                                    <td> &nbsp;<?php echo $std['addnum'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Addmission Date </td>
                                                    <td> &nbsp;<?php echo $std['doj'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Date of Birth </td>
                                                    <td> &nbsp;<?php echo $std['dob'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender </td>
                                                    <td> &nbsp;<?php echo $std['gender'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Grade </td>
                                                    <td> &nbsp;<?php echo $std['grade'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email </td>
                                                    <td> &nbsp;<?php echo $std['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nationality </td>
                                                    <td> &nbsp;<?php echo $std['nationality'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Current Address </td>
                                                    <td> &nbsp;<?php echo $std['currentaddress'] ?></td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mobView">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-center">Guardian Information</h3>
                                        <hr>
                                        <br>
                                        <center>
                                            <table style="width: 70%">
                                                <tr>
                                                    <td>Guardian Name </td>
                                                    <td> &nbsp;<?php echo $parent['guardianname'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Guardian Number </td>
                                                    <td> &nbsp;<?php echo $parent['guardiannum'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Father Name </td>
                                                    <td> &nbsp;<?php echo $parent['fathername'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Father Number </td>
                                                    <td> &nbsp;<?php echo $parent['fathernum'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Name </td>
                                                    <td> &nbsp;<?php echo $parent['mothername'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Number </td>
                                                    <td> &nbsp;<?php echo $parent['mothernum'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Parent Address </td>
                                                    <td> &nbsp;<?php echo $parent['paddress'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sibling Name </td>
                                                    <td> &nbsp;<?php echo $parent['siblingname'] ?></td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div style="padding: 10px"></div>
                    </div>
                </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="../../assets/scripts/main.js"></script>

<!--result-->
<div class="modal fade" id="resultView" tabindex="-1" role="dialog" aria-labelledby="resultViewTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultViewTitle">Result</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <td>#</td>
                        <td>Exam</td>
                        <td>Percent</td>
                        <td></td>
                    </thead>
                    <tbody>
                <?php
                    $i=0;
                    $sql0 = "SELECT * FROM graph WHERE addnum = '$addnum' ORDER BY examid ASC";
                    $result0 = mysqli_query($conn,$sql0);
                    while($data = mysqli_fetch_assoc($result0)):
                ?>
                        <tr>
                            <td><?php echo ++$i ?></td>
                            <td><?php echo $data['examid'] . " Terminal"?></td>
                            <td><?php echo $data['percent']?>%</td>
                            <td><button class="btn btn-primary" onclick="myfun(this.value)" value="<?php echo $data['id'] ?>" data-toggle="modal" data-target="#marksView">View Details</button></td>
                        </tr>
                <?php
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

<div id="printDiv" style="display: none"></div>

<!--sample detail-->
<div class="modal fade bd-example-modal-lg" id="marksView" tabindex="-1" role="dialog" aria-labelledby="marksViewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="marksViewLabel">Result Preview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="resultShow"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printFun()">Print</button>
        <button type="button" class="btn btn-primary" id="cmd">Download as PDF</button>
      </div>
    </div>
  </div>
</div>

<!-- health status of student-->
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Terminal');
        data.addColumn('number', 'Percentage');
        data.addColumn({type: 'string', role: 'annotation'}); 
        data.addRows([
<?php
        $query = "SELECT * FROM graph WHERE addnum = '$addnum'";
        $exec = mysqli_query($conn,$query);
        
        while($rslt = mysqli_fetch_assoc($exec)):
            $i=1;
            $exam = $rslt['examid'] . " Terminal";
            $cmnt = $rslt['percent'] . "%";
?>
            ['<?php echo $exam ?>',  <?php echo $rslt['percent'] ?>,'<?php echo $cmnt ?>'],
<?php
        endwhile;
?>
        ]);

        var options = {
            title: 'Student Perfermance in Current Year',
            curveType: 'function',
            legend: { position: 'bottom' },
            vAxis: {viewWindowMode: "explicit", viewWindow:{ min: 0, max: 105 }},
            pointSize: 5,
            tooltip: { isHtml: true },
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
    }
    
    function myfun(val) {
        var id = val;
        // alert(id);
        $.ajax({
             url: 'markExtract.php?id='+id,
            success:function (data) {
                $('#resultShow').html(data);
            }
        })

        // $.ajax({
        //      url: 'preview.php?id='+id,
        //     success:function (data) {
        //         $('#printDiv').html(data);
        //     }
        // })
    }
    
    function printFun() {
        var all = document.getElementById('allcontant').innerHTML;
        var printin = document.getElementById('printDiv').innerHTML;
        document.getElementById('allcontant').innerHTML = printin;
        fixedTableSize();
        window.print();
        document.getElementById('allcontant').innerHTML = all;
    }
</script>
<style>
    @media screen and (max-width: 992px) {
        .chart {
            width: auto !important;
            height: auto !important;
        }
        .mobView {
            padding-top: 20px;
        }
    }
    
    @media print {
        @page { 
            margin: 0;
        }
        body {
            margin: 1.6cm;
        }
    }
</style>