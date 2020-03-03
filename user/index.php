<?php
    include "../dbconnect.php";
    
    if(!$_SESSION['id']) {
        header('location: ../home');
    }
    
    $id = $_SESSION['id'];
    $msg = '';
    $err = '';
    if(isset($_POST['logoupdate'])) {
        $logo = $_FILES['logo']['name'];

        $target = '../images/';
        $extension = pathinfo( $_FILES['logo']['name'], PATHINFO_EXTENSION );
        $newname = 'logoid@' . time() . '.' . $extension;
        $file = 'schoolLogo/' . $newname;
        $target_file = $target . $file;
        $temp = $_FILES['logo']['tmp_name'];

        if(move_uploaded_file($temp, $target_file)) {
            $sql = "UPDATE user SET logo = '$file' WHERE id='$id'";;
            $result = mysqli_query($conn,$sql);
            $msg = "Logo Successfully Updated!!";
        } else {
            $err = "Error while uploading Logo!!";
        }
    }

    if(isset($_POST['borderupdate'])) {
        $logo = $_FILES['border']['name'];

        $target = '../images/';
        $extension = pathinfo( $_FILES['border']['name'], PATHINFO_EXTENSION );
        $newname = 'borderid@' . time() . '.' . $extension;
        $file = 'border/' . $newname;
        $target_file = $target . $file;
        $temp = $_FILES['border']['tmp_name'];

        if(move_uploaded_file($temp, $target_file)) {
            $sql = "UPDATE user SET border = '$file' WHERE id='$id'";;
            $result = mysqli_query($conn,$sql);
            $msg = "Border Successfully Updated!!";
        } else {
            $err = "Error while uploading Border!!";
        }
    }

    if(isset($_POST['update'])) {
        
        $schoolname = $_POST['schoolname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        $sql = "UPDATE user SET schoolname = '$schoolname', contact = '$contact', email = '$email' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result) {
            $msg = "Information Successfully Updated!!";
        } else {
            $err = "Error while Updating Information!!";
        }
    }

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    $data = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MYED | Profile</title>
    <link rel="icon" type="image/png" href="../images/icons/myed.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="jquery-3.4.1.min.js"></script>
    <link href="../css/dashboard.css" rel="stylesheet">
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
                                                <img width="42" class="rounded-circle" src="../images/schoolLogo/default.png" alt="">
                                            <?php
                                                } else {
                                            ?>
                                                <img width="42" class="rounded-circle" src="../images/<?php echo $data['logo'] ?>" alt="">
                                            <?php
                                                }
                                            ?>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="../user"><button type="button" tabindex="0" class="dropdown-item">Profile</button></a>
                                            <a href="../user/logout"><button type="button" tabindex="0" class="dropdown-item">Logout</button></a>
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
                                    <a href="../dashboard">
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
                                            <a href="../student/add">
                                                <i class="metismenu-icon"></i>
                                                Add Student
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../student">
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
                                            <a href="../marks/add">
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
                                            <a href="../course/add">
                                                <i class="metismenu-icon"></i>
                                                Add Courses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../course">
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
                            if($msg != '') {
                        ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $msg; ?>
                        </div>
                        <?php
                            }
                        ?>
                        <?php 
                            if($err != '') {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $err; ?>
                        </div>
                        <?php
                            }
                        ?>
                        <div>
                            <div class="row">
  		                        <div class="col-sm-3">
                                    <div class="text-center">
                                        <?php
                                            if($data['logo'] == '') {
                                        ?>
                                            <img width="200" height="200" class="rounded-circle avatar" src="../images/schoolLogo/default.png" alt="">
                                        <?php
                                            } else {
                                        ?>
                                            <img width="200" height="200" class="rounded-circle avatar" src="../images/<?php echo $data['logo'] ?>" alt="">
                                        <?php
                                            }
                                        ?>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="file" name="logo" required id="logo">
                                            <div style="float:right">
                                            <button name="logoupdate" class="btn btn-success" type="submit">
                                                <i class="fas fa-upload"></i>
                                            </botton>
                                            </div>
                                        </form>
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="text-center">
                                        School Border for Report Card <br>
                                        <img width="200" height="200" class="avatar" src="../images/<?php echo $data['border'] ?>" alt="">
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="file" name="border" required id="border">
                                            <div style="float:right">
                                            <button name="borderupdate" class="btn btn-success" type="submit">
                                                <i class="fas fa-upload"></i>
                                            </botton>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <br>
                                    <div style="padding-left: 60px;">
                                        <hr>
                                        <form class="form" method="post">
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="schoolname"><h4>School Name</h4></label>
                                                    <input type="text" style="width:500px" class="form-control" name="schoolname" id="schoolname" value="<?php echo $data['schoolname'] ?>" title="enter school name">
                                                </div>
                                            </div>
                                            <div class="form-group">  
                                                <div class="col-xs-6">
                                                    <label for="username"><h4>Username</h4></label>
                                                    <input type="text" style="width:500px" class="form-control" name="username" id="username" value="<?php echo $data['username'] ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="contact"><h4>Contact</h4></label>
                                                    <input type="text" style="width:500px" class="form-control" name="contact" id="contact" value="<?php echo $data['contact'] ?>" title="enter your phone number if any.">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="email"><h4>Email</h4></label>
                                                    <input type="text" style="width:500px" class="form-control" name="email" id="email" value="<?php echo $data['email'] ?>" title="enter your mobile number if any.">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                        <br>
                                                        <button name="update" class="btn btn-lg btn-success" type="submit">Update</button>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>
</html>