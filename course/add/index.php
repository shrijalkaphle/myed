<?php
    error_reporting(0);
    ini_set('display_errors', 0);
    
    include '../../dbconnect.php';
    
    if(!$_SESSION['id']) {
        header('location: ../../home');
    }
    
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    $data = mysqli_fetch_assoc($result);

    $msg = '';
    $err = '';

    if(isset($_POST['add'])) {
        $grade = '';
        for($i = 1;$i<11;$i++) {
            $val = "class".$i;
            if($_POST[$val]) {
                $grade = $grade . $_POST[$val].','; 
            }
        }
        $grade = rtrim($grade, ",");
        // echo $grade;
        $name = $_POST['name'];
        $fullmark = $_POST['fullmark'];
        $theory = $_POST['theory'];
        $practical = $_POST['practical'];

        //insert query
        $sql = "INSERT INTO course VALUES ('','$name','$fullmark','$theory','$practical','$grade')";
        $result = mysqli_query($conn,$sql);

        if($result) {
            $msg = "Course Has been added to the list";
        } else {
            $err = "Sorry, there was an error adding course to the list";
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
    <title>MYED | Add Course</title>
    <link rel="icon" type="image/png" href="../../images/icons/myed.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="/myed/css/dashboard.css" rel="stylesheet">
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
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading" style="padding-top: 25px !important;">School Management</li>
                                <li style="padding-top: 15px !important;">
                                    <a href="/myed/dashboard">
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
                                            <a href="/myed/student/add">
                                                <i class="metismenu-icon"></i>
                                                Add Student
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/myed/student">
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
                                <li style="padding-bottom: 15px !important;">
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-chalkboard-teacher"></i>
                                        Teacher
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="../../teacher/add">
                                                <i class="metismenu-icon"></i>
                                                Add Teacher
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../teacher">
                                                <i class="metismenu-icon"></i>
                                                View Teacher
                                            </a>
                                        </li>
                                    </ul>
                                </li> 
                                <li style="padding-top: 15px !important;">
                                    <a href="#" class="mm-active">
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
                                <li style="padding-top: 15px !important;">
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-comments"></i>
                                        CounselAI
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-add-user icon-gradient bg-mean-fruit"></i>
                                    </div>
                                    <div>Add Course</div>
                                </div>
                            </div>
                        </div>
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
                        <form method="post" enctype="multipart/form-data">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Course Details</h5>
                                    <div class="divider"></div>
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <div class="position-relative form-group">
                                                <label for="name" class="">Subject Name</label>
                                                <input name="name" id="name" placeholder="Name of Subject" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-7"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="fullmark" class="">Full Mark</label>
                                                <input name="fullmark" id="fullmark" placeholder="Full Marks of Subject" type="number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="theory" class="">Theory</label>
                                                <input name="theory" id="theory" placeholder="Theory Mask" type="number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="practical" class="">Practical</label>
                                                <input name="practical" id="practical" placeholder="Practical Mask" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="image" class="">Studied By Classes</label>
                                        <!-- list of classes -->
                                        <br>
                                        <input type="checkbox" onchange="changefun()" id="allCheck" value="1">
                                        <label for="class1">Select All&nbsp;&nbsp;</label>    
        
                                        <div style="padding: 20px">
                                            <input type="checkbox" id="class1" name="class1" value="1">
                                            <label for="vehicle1">Class One&nbsp;&nbsp;</label>
                                            <input type="checkbox" id="class2" name="class2" value="2">
                                            <label for="vehicle1">Class Two&nbsp;&nbsp;</label>
                                            <input type="checkbox" id="class3" name="class3" value="3">
                                            <label for="vehicle1">Class Three&nbsp;&nbsp;</label>
                                            <input type="checkbox" id="class4" name="class4" value="4">
                                            <label for="vehicle1">Class Four&nbsp;&nbsp;</label>
                                            <input type="checkbox" id="class5" name="class5" value="5">
                                            <label for="vehicle1">Class Five&nbsp;&nbsp;</label>
                                            <input type="checkbox" id="class6" name="class6" value="6">
                                            <label for="vehicle1">Class Six&nbsp;&nbsp;</label>
                                            <input type="checkbox" id="class7" name="class7" value="7">
                                            <label for="vehicle1">Class Seven&nbsp;&nbsp;</label>
                                            <input type="checkbox" id="class8" name="class8" value="8">
                                            <label for="vehicle1">Class Eight&nbsp;&nbsp;</label><br>
                                            <input type="checkbox" id="class9" name="class9" value="9">
                                            <label for="vehicle1">Class Nine&nbsp;&nbsp;</label>
                                            <input type="checkbox" id="class10" name="class10" value="10">
                                            <label for="vehicle1">Class Ten&nbsp;&nbsp;</label>
                                        </div>
                                    </div>
                                    <br>
                                    <center><input type="submit" value="Add Course" name="add" class="mt-2 btn btn-primary"></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="/myed/assets/scripts/main.js"></script></body>
</html>

<script>
    $(document).ready(function () {
        $('select').selectize({
            sortField: 'text'
        });
    });
    function changefun() {
        var status = $('#allCheck').is(":checked")
        // alert(status)
        if(status) {
            document.getElementById('class1').checked = true;
            document.getElementById('class2').checked = true;
            document.getElementById('class3').checked = true;
            document.getElementById('class4').checked = true;
            document.getElementById('class5').checked = true;
            document.getElementById('class6').checked = true;
            document.getElementById('class7').checked = true;
            document.getElementById('class8').checked = true;
            document.getElementById('class9').checked = true;
            document.getElementById('class10').checked = true;
        }
        if(!status) {
            document.getElementById('class1').checked = false;
            document.getElementById('class2').checked = false;
            document.getElementById('class3').checked = false;
            document.getElementById('class4').checked = false;
            document.getElementById('class5').checked = false;
            document.getElementById('class6').checked = false;
            document.getElementById('class7').checked = false;
            document.getElementById('class8').checked = false;
            document.getElementById('class9').checked = false;
            document.getElementById('class10').checked = false;
        }
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
    .card {
        width: 70%;
        margin: auto;
    }
</style>