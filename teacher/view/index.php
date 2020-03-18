<?php
    include "../../dbconnect.php";
    
    //check if user is still login or not
    if(!$_SESSION['id']) {
        header('location: ../../home');
    }

    //variable to display different error messages
    $msg = '';
    $err = '';
    
    $id = $_GET['id'];
    
    $uid = $_SESSION['id'];

    if(isset($_POST['pwdupdate'])){
        $pwd1 = $_POST['pwd1'];
        $pwd2 = $_POST['pwd2'];

        if($pwd1 == $pwd2) {
            $pwd = md5($pwd1);
            $query = "UPDATE teacher SET password = '$pwd' WHERE id = '$id'";
            $result = mysqli_query($conn,$query);
            if($result) {
                $msg = "Password Successfully Updated! New password is <b><i>". $pwd1 . "</i></b>";
            } else {
                $err = "Error while changing password!";
            }
        }
    }

    $sql = "SELECT * FROM user WHERE id = '$uid'";
    $result = mysqli_query($conn,$sql);

    $data = mysqli_fetch_assoc($result);

    $sql1 = "SELECT * FROM teacher WHERE id = '$id'";
    $result1 = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_assoc($result1);
?>

<!-- start of html code -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MYED | Teacher Detail</title>
    <link rel="icon" type="image/png" href="../../images/icons/myed.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../../css/dashboard.css" rel="stylesheet">
    <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
</head>
<body id="allcontant">
    <input type="hidden" id="addnum" value="<?php echo $addnum ?>">
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
                                    <a href="#"  class="mm-active">
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
                                            <a href="../../teacher">
                                                <i class="metismenu-icon"></i>
                                                View Teacher
                                            </a>
                                        </li>
                                    </ul>
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

                    <?php if($msg != '') { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $msg ?>
                    </div>
                    <?php } ?>
                    <?php if($err != '') { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $err ?>
                    </div>
                    <?php } ?>
                        <div class="row">
                            <div class="col-md-4">
                                <center>
                                    <img width="200" height="200" class="rounded-circle avatar" src="../../images/teacher/<?php echo $row['image'] ?>" alt="">
                                </center>
                                <div style="padding-left:20px; font-size:20px">
                                    <br>
                                    <center>
                                        <table>
                                            <tr>
                                                <td>Full Name </td>
                                                <td><div style="width:50px"></div></td>
                                                <td> &nbsp;<?php echo $row['name'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Addmission Number </td>
                                                <td><div style="width:10px"></div></td>
                                                <td> &nbsp;<?php echo $row['addnum'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Addmission Date </td>
                                                <td><div style="width:10px"></div></td>
                                                <td> &nbsp;<?php echo $row['doj'] ?></td>
                                            </tr>
                                        </table>
                                    </center>
                                    <div style="float:right;padding-top:20px">
                                        <a href="../edit/<?php echo $id ?>"><button class = "btn btn-primary"><i class="fas fa-edit"></i>&nbsp; Edit</button></a>
                                        <button class = "btn btn-primary" data-toggle="modal" data-target="#changePWD"><i class="fas fa-edit"></i> &nbsp;Change Password</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <div style="font-size: 18px">
                                    <div class="card-body">
                                        <div style="height:50px"></div>
                                        <h3 class="text-center">Personal Information</h3>
                                        <br>
                                        <center>
                                            <table>
                                                <tr>
                                                    <td>Full Name</td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Addmission Number </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['addnum'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Username</b> </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<b><?php echo $row['uname'] ?></b></td>
                                                </tr>
                                                <tr>
                                                    <td>Addmission Date </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['doj'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Date of Birth </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['dob'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['gender'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact Number </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo "(+977)-" . $row['phone'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nationality </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['nationality'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Current Address </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['caddress'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Permanent Address </td>
                                                    <td><div style="width:50px"></div></td>
                                                    <td> &nbsp;<?php echo $row['paddress'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Qualification </td>
                                                    <td><div style="width:10px"></div></td>
                                                    <td> &nbsp;<?php echo $row['qualification'] ?></td>
                                                </tr>
                                            </table>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <div style="padding: 10px"></div>
                    </div>
                </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="../../assets/scripts/main.js"></script>
</body>
</html>

<!-- change password -->
<div class="modal fade" id="changePWD" tabindex="-1" role="dialog" aria-labelledby="changePWDLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Details Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="position-relative form-group">
                        <label for="uname" class="">Username</label>
                        <input name="uname" id="uname" type="text" class="form-control" value="<?php echo $row['uname']?>" disabled>
                    </div>
                    <div class="position-relative form-group">
                        <label for="pwd1" class="">Password</label>
                        <input name="pwd1" id="pwd1" type="password" placeholder="Password Update" class="form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label for="pwd2" class="">Confirm Password</label>
                        <input name="pwd2" id="pwd2" type="password" placeholder="Password Update" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="pwdupdate" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    table tr td:first-child {
        text-align: right;
    }
    table tr td {
        text-align: left;
    }
</style>