<?php
    include "../../dbconnect.php";
    
    if(!$_SESSION['id']) {
        header('location: ../../home');
    }
    
    $id = $_GET['id'];

    $uid = $_SESSION['id'];

    $sql = "SELECT * FROM user WHERE id = '$uid'";
    $result = mysqli_query($conn,$sql);

    $data = mysqli_fetch_assoc($result);

    $msg = '';
    $err = '';

    $sql = "SELECT * from student WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $std = mysqli_fetch_assoc($result);

    $pid = $std['pid'];

    if(isset($_POST['update'])) {
        // echo "<script>alert('ya')</script>";
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $addno = $_POST['addno'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $grade = $_POST['grade'];
        $doj = $_POST['doj'];
        $nationality = $_POST['nationality'];
        $talent = $_POST['talent'];
        $specify = $_POST['specify'];

        $img = $_FILES['image']['name'];

        $gname = $_POST['guardianname'];
        $gno = $_POST['guardiannum'];
        $fname = $_POST['fathername'];
        $fno = $_POST['fathernum'];
        $mname = $_POST['mothername'];
        $mno = $_POST['mothernum'];
        $sname = $_POST['sibling'];
        $paddress = $_POST['paddress'];
        $time = time();

        if(!$img == '') {
            $target = '../../images/';
            $extension = pathinfo( $_FILES['image']['name'], PATHINFO_EXTENSION );
            $newname = 'photoid@' . time() . '.' . $extension;
            $file = 'profileImages/' . $newname;
            $target_file = $target . $file;
            $temp = $_FILES['image']['tmp_name'];

            if (move_uploaded_file($temp, $target_file)) {
                $sql = "UPDATE guardian SET guardianname = '$gname', guardiannum = '$gno', fathername = '$fname', fathernum = '$fno', mothername = '$mname', mothernum = '$mno', siblingname = '$sname', paddress = '$paddress' WHERE id = '$pid'";
                $result = mysqli_query($conn,$sql);
                
                $sql = "UPDATE student SET name = '$name', addnum = '$addno', dob = '$dob', nationality = '$nationality', email = '$email', currentaddress = '$address', gender = '$gender', grade = '$grade', doj = '$doj', image = '$file', talent = '$talent', specify = '$specify', updatetime = '$time' WHERE id = '$id'";
                $result = mysqli_query($conn,$sql);
                
                $msg = "Student Record Successfully Updated!";
                // $msg = $sql;
                
            } else {
                $err = "Sorry, there was an error uploading your file. Student Record not Updated!";
            }
        } else {
            $sql = "UPDATE guardian SET guardianname = '$gname', guardiannum = '$gno', fathername = '$fname', fathernum = '$fno', mothername = '$mname', mothernum = '$mno', siblingname = '$sname', paddress = '$paddress' WHERE id = '$pid'";
            $result = mysqli_query($conn,$sql);
                
            $sql = "UPDATE student SET name = '$name', addnum = '$addno', dob = '$dob', nationality = '$nationality', email = '$email', currentaddress = '$address', gender = '$gender', grade = '$grade', doj = '$doj', talent = '$talent', specify = '$specify', updatetime = '$time', updatetime = '' WHERE id = '$id'";
            $result = mysqli_query($conn,$sql);
    
            $msg = "Student Record Successfully Updated!";
        }
    }

    $sql = "SELECT * from student WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $std = mysqli_fetch_assoc($result);

    $pid = $std['pid'];
    $sql = "SELECT * from guardian WHERE id = '$pid'";
    $result = mysqli_query($conn,$sql);
    $pnt = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MYED | Edit Student</title>
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
                                    <a href="#"  class="mm-active">
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
                                <li style="padding-top: 15px !important;">
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-comments"></i>
                                        CounselAI
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                </li>
                                <!-- <li style="padding-bottom: 15px !important;">
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
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-edit icon-gradient bg-mean-fruit"></i>
                                    </div>
                                    <div>Edit Student</div>
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
                                    <h5 class="card-title">Student Details</h5>
                                    <div class="divider"></div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="name" class="">Full Name</label>
                                                <input name="name" id="name" value = "<?php echo $std['name'] ?>" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="dob" class="">Date of Birth</label>
                                                <input name="dob" id="dob" data-date-format="DD MMMM YYYY" value = "<?php echo $std['dob'] ?>" type="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="addmission" class="">Addmission Number</label>
                                                <input name="addno" id="addmission" placeholder="Addmission Number" value = "<?php echo $std['addnum'] ?>" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="address" class="">Address</label>
                                                <input name="address" id="address" placeholder="Current Address of Student" value = "<?php echo $std['currentaddress'] ?>" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="country" class="">Country</label>
                                                <input name="country" id="country" value="Nepal" type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="gender" class="">Gender</label>
                                                <select name="gender" class="form-control" id="gender" required>
                                                    <option value="" disabled selected>Select Gender</option>
                                                    <option value="Male" <?php if($std['gender'] == 'Male'){ ?> selected <?php } ?>>Male</option>
                                                    <option value="Female" <?php if($std['gender'] == 'Female'){?> selected <?php } ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <div class="position-relative form-group">
                                                <label for="email" class="">Email<span> (Optional)</span></label>
                                                <input name="email" id="email" value = "<?php echo $std['email'] ?>" type="email" placeholder="Email Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="position-relative form-group">
                                                <label for="grade" class="">Grade</label>
                                                <input name="grade" id="grade" value = "<?php echo $std['grade'] ?>" type="text" placeholder="Grade" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="position-relative form-group">
                                                <label for="doj" class="">Date of Joining</label>
                                                <input name="doj" id="doj" type="date" value = "<?php echo $std['doj'] ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="position-relative form-group">
                                                <label for="nationality" class="">Nationality</label>
                                                <input name="nationality" id="nationality" value = "<?php echo $std['nationality'] ?>" placeholder="Nationality" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="image" class="">Upload Image</label>
                                                <input name="image" id="image" type="file" class="form-control" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="position-relative form-group">
                                                <label for="talent" class="">Talent</label>
                                                <select name="talent" id="talent" class="form-control" required>
                                                    <option value="" disabled selected>Select Talent</option>
                                                    <option value="Academics" <?php if($std['talent'] == 'Academics'){ ?> selected <?php } ?>>Academics</option>
                                                    <option value="Sports" <?php if($std['talent'] == 'Sports'){ ?> selected <?php } ?>>Sports</option>
                                                    <option value="Music" <?php if($std['talent'] == 'Music'){ ?> selected <?php } ?>>Musics</option>
                                                    <option value="Arts" <?php if($std['talent'] == 'Arts'){ ?> selected <?php } ?>>Arts</option>
                                                    <option value="Other" <?php if($std['talent'] == 'Other'){ ?> selected <?php } ?>>Others (Specify)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col md-3">
                                            <label for="specify" class="">Specify Here</label>
                                            <input name="specify" id="specify" value="<?php echo $std['specify'] ?>" type="text" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Guardians & Parents Details</h5>
                                    <div class="divider"></div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="guardianname" class="">Guardians Name</label>
                                                    <input name="guardianname" id="guardianname" value = "<?php echo $pnt['guardianname'] ?>" type="text" placeholder="Guardians Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="guardiannum" class="">Guardians Number</label>
                                                    <input name="guardiannum" id="guardiannum" value = "<?php echo $pnt['guardiannum'] ?>" type="number" placeholder="+977-xxxxxxxxxx" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="fathername" class="">Father Name</label>
                                                    <input name="fathername" id="fathername" value = "<?php echo $pnt['fathername'] ?>" type="text" placeholder="Father Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="fathernum" class="">Father Number</label>
                                                    <input name="fathernum" id="fathernum" value = "<?php echo $pnt['fathernum'] ?>" type="number" placeholder="+977-xxxxxxxxxx" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="mothername" class="">Mother Name</label>
                                                    <input name="mothername" id="mothername" value = "<?php echo $pnt['mothername'] ?>" type="text" placeholder="Mother Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="mothernum" class="">Mother Number</label>
                                                    <input name="mothernum" id="mothernum" value = "<?php echo $pnt['mothernum'] ?>" type="number" placeholder="+977-xxxxxxxxxx" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="sibling" class="">Sibling Name (Optional)</label>
                                                    <input name="sibling" id="sibling" value = "<?php echo $pnt['siblingname'] ?>"  type="text" placeholder="Sibling Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="paddress" class="">Permanent Address</label>
                                                    <input name="paddress" id="paddress" value = "<?php echo $pnt['paddress'] ?>" type="text" placeholder="Permanent Address" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <center><input type="submit" value="Update Student" name="update" class="mt-2 btn btn-primary"></center>
                                    </div>
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