<?php
    include "../../dbconnect.php";
    
    if(!$_SESSION['id']) {
        header('location: ../../home');
    }
    
    $id = $_SESSION['id'];
    $flag = 0;
    $msg = '';
    $err = '';

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    $data = mysqli_fetch_assoc($result);

    if(isset($_POST['add'])) {
        $totalSub = $_POST['totalSubject'];
        $addnum = $_POST['addnum'];
        $term = $_POST['term'];
        // $marks = array();
        $total = 0;
        $fullmarks = 0;
        $pass = 1;

        for($i=0;$i<$totalSub;$i++){
            $subid = $_POST['sub'.$i];

            //get full marks of each subject
            $sql1 = "SELECT * FROM course WHERE id = '$subid'";
            $result1 = mysqli_query($conn,$sql1);
            $row = mysqli_fetch_assoc($result1);
            $fullmarks = $fullmarks + $row['fullmark'];

            $practical = $_POST['sub'.$i.'_pr'];
            $theory = $_POST['sub'.$i.'_th'];

            if($practical != '') {
                if($practical< ($row['practical'])*0.32 ){
                    $pass = 0;
                }
            }
            
            if($theory< ($row['theory'])*0.32 ){
                $pass = 0;
            }
            
            $total = $total + $practical + $theory;

            $sql1 = "INSERT INTO marks VALUES ('','$addnum','$term','$subid','$practical','$theory','')";
            $result1 = mysqli_query($conn,$sql1);

            if(!$result) {
                $flag = 1;
            }
        }
        if($flag == 0) {
            $msg = "Marks Added to Database";

            $percent = round(($total/$fullmarks)*100, 2);
            $sql2 = "INSERT INTO graph VALUES ('','$addnum','$term','$percent','$pass')";
            $result2 = mysqli_query($conn,$sql2);
        } else {
            $err = "Error while uploading Marks";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MYED | Add Marks</title>
    <link rel="icon" type="image/png" href="../../images/icons/myed.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <link href="../../css/dashboard.css" rel="stylesheet">
</head>
<body>
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
            </div>    <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                            <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php echo $data['schoolname']; ?> &nbsp;
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
                                    <a href="#">
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
                                    <a href="#" class="mm-active">
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
                        <?php
                            if($err != '') {
                        ?>
                        <div class="alert alert-danger fade show" role="alert">
                            <?php echo $err ?>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            if($msg != '') {
                        ?>
                        <div class="alert alert-success fade show" role="alert">
                            <?php echo $msg ?>
                        </div>
                        <?php
                            }
                        ?>
                        <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Marks</h5>
                                    <div class="divider"></div>
                                        <div class="form-row">
                                            <div class="col-md-8">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="position-relative form-group">
                                                    <input name="addnum" id="addnum" placeholder="Search with admission number" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="position-relative form-group">
                                                    <button onclick="detailExtract()" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div><hr>
                                        <div id="examDetails"></div>
                                </div>
                            </div>
                    </div>
                </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="../../assets/scripts/main.js"></script>
</body>
</html>
<script>
    function maxCheck(object,maxValue) {
        var max = maxValue;
        if(object.value>max) {
            object.value=max;
        }
    };

    function detailExtract() {
        // var val = $('#addno').val();
        var val = document.getElementById("addnum").value;
        
        // document.getElementById("addnum").value = val;
        
        $.ajax({
            url: 'stdInfo.php',
            data: 'addno='+val,
            success:function (data) {
                $('#examDetails').html(data);
            }
        });
    }
    
    
</script>
<style>
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type="number"] {
        -moz-appearance: textfield;
    }
</style>