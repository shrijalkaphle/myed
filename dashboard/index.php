<?php
    include "../dbconnect.php";
    
    if(!$_SESSION['id']) {
        header('location: ../home');
    }
    //gender define
    $male = 0;
    $female = 0;

    //pass and failed
    $query = "SELECT * FROM graph GROUP BY addnum HAVING COUNT(*)>=1 AND pass=1";
    $result1 = mysqli_query($conn,$query);
    $pass = mysqli_num_rows($result1);
    
    $query = "SELECT * FROM graph GROUP BY addnum HAVING COUNT(*)>=1 AND pass=0";
    $result = mysqli_query($conn,$query);
    $failed = mysqli_num_rows($result);

    //talent graph
    $academic = 0;
    $sport = 0;
    $arts = 0;
    $music = 0;
    $other = 0;

    //health status
    $query = "SELECT * FROM healthstatus WHERE isSick = 1";
    $result = mysqli_query($conn,$query);
    $unhealthy = mysqli_num_rows($result);

    $query = "SELECT * FROM healthstatus WHERE isSick = '0' AND status = '1'";
    $result = mysqli_query($conn,$query);
    $recovered = mysqli_num_rows($result);

    $id = $_SESSION['id'];
    
    $query = "SELECT * FROM student";
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($result)) {
        //for number of male and female
        if(strtolower($row['gender']) == 'male') {
            $male++;
        } else if(strtolower($row['gender']) == 'female') {
            $female++;
        }
        if(strtolower($row['talent']) == 'Academics') {
            $academic++;
        } else if(strtolower($row['talent']) == 'music') {
            $music++;
        } else if (strtolower($row['talent']) == 'sports') {
            $sport++;
        }else if (strtolower($row['talent']) == 'arts') {
            $art++;
        }else {
            $other++;
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
    <title>MYED | Dashboard</title>
    <link rel="icon" type="image/png" href="../images/icons/myed.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="../js/jquery-3.4.1.min.js"></script>
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
                                <li class="mm-active" style="padding-top: 15px !important;">
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
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Dashboard
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Student</div>
                                            <div class="widget-subheading"></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>
                                                <?php
                                                    $sql = "SELECT * FROM student";
                                                    $result = mysqli_query($conn,$sql);
                                                    $stdCount = mysqli_num_rows($result);
                                                    $healthy = $stdCount - ($unhealthy + $recovered);
                                                    echo $stdCount;
                                                ?>
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Courses</div>
                                            <div class="widget-subheading"></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>
                                                <?php
                                                    $sql = "SELECT * FROM course";
                                                    $result = mysqli_query($conn,$sql);
                                                    $courseCount = mysqli_num_rows($result);
                                                    echo $courseCount;
                                                ?> 
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Classes</div>
                                            <div class="widget-subheading"></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>12</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <canvas id="gender"></canvas>
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6 second">
                               <div class="card">
                                    <canvas id="health"></canvas>
                                    <br>
                               </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <canvas id="marks"></canvas>
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6 second">
                                <div class="card">
                                    <canvas id="talent"></canvas>
                                    <br>
                                </div>
                            </div>
                            
                        </div>
                        <br><br>
                        <div class="main-card mb-3 card">
                            <div class="card-header">
                                Recent Updates
                            </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th class="text-center">Addmission Number</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sql = "SELECT * FROM student ORDER BY updatetime DESC LIMIT 5";
                                            $result = mysqli_query($conn,$sql);
                                            $i = 0;
                                            while($row=mysqli_fetch_assoc($result)):
                                                $i++;
                                        ?>
                                            <tr>
                                                <td class="text-center text-muted">#<?php echo $i ?></td>
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
                                                                <div class="widget-subheading opacity-7">Grade: <?php echo $row['grade'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $row['addnum'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href = "../student/view/<?php echo $row['id'] ?>"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button></a>
                                                </td>
                                            </tr>
                                        <?php
                                            endwhile;
                                        ?>
                                        </tbody>
                                    </table>
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

<style>
    @media screen and (max-width: 992px) {
        
        .second {
            padding-top: 20px ;
        }
    }
</style>

<script>
    var canvas1 = document.getElementById("gender");
    var ctx1 = canvas1.getContext('2d');

    var canvas2 = document.getElementById("marks");
    var ctx2 = canvas2.getContext('2d');

    var canvas3 = document.getElementById("health");
    var ctx3 = canvas3.getContext('2d');

    var canvas4 = document.getElementById("talent");
    var ctx4 = canvas4.getContext('2d');

    // Global Options:
    Chart.defaults.global.defaultFontColor = 'black';
    Chart.defaults.global.defaultFontSize = 16;

    // chart data for gender chart
    var data1 = {
        labels: ["Male", "Female"],
        datasets: [
            {
                fill: true,
                backgroundColor: ['#FF6384','#36A2EB'],
                data: [ <?php echo $male; ?> , <?php echo $female; ?> ],
                borderColor:	['#FF6384', '#36A2EB'],
                borderWidth: [2,2]
            }
        ]
    };
    var options1 = {
            title: {
                    display: true,
                    text: 'Gender',
                    position: 'top'
                },
            rotation: -0.7 * Math.PI
    };

    // chart data for pass and failed chart
    var data2 = {
        labels: ["Failed", "Pass"],
        datasets: [
            {
                fill: true,
                backgroundColor: ['#FF6384','#36A2EB'],
                data: [ <?php echo $failed; ?> , <?php echo $pass; ?>],
                borderColor:	['#FF6384', '#36A2EB'],
                borderWidth: [2,2]
            }
        ]
    };
    var options2 = {
            title: {
                    display: true,
                    text: 'Pass Fail',
                    position: 'top'
                },
            rotation: -0.7 * Math.PI
    };

    // chart data for pass failed chart
    var data3 = {
        labels: ["Healthy","Unhealthy","Recovered"],
        datasets: [
            {
                fill: true,
                backgroundColor: ['#36A2EB','#FF6384','#FFCD56'],
                data: [ <?php echo $healthy; ?> , <?php echo $unhealthy; ?>,<?php echo $recovered; ?>],
                borderColor:	['#36A2EB', '#FF6384','#FFCD56'],
                borderWidth: [2,2]
            }
        ]
    };

    var options3 = {
            title: {
                    display: true,
                    text: 'Health Status',
                    position: 'top'
                },
            rotation: -0.7 * Math.PI
    };

    // chart data for talent chart
    var data4 = {
        labels: ["Academics","Sports","Arts","Music","Others"],
        datasets: [
            {
                fill: true,
                backgroundColor: ['#36A2EB','#FF6384','#FFCD56','#FF9124','#4BC0C0'],
                data: [
                    <?php echo $academic ?>,
                    <?php echo $sport ?>,
                    <?php echo $arts ?>,
                    <?php echo $music ?>,
                    <?php echo $other ?>
                ],
                borderColor:	['#36A2EB', '#FF6384','#FFCD56','#FF9124','#4BC0C0'],
                borderWidth: [2,2]
            }
        ]
    };

    var options4 = {
            title: {
                    display: true,
                    text: 'Talent',
                    position: 'top'
                },
            rotation: -0.7 * Math.PI
    };


    // Chart declaration:
    var myBarChart = new Chart(ctx1, {
        type: 'pie',
        data: data1,
        options: options1
    });
    var myBarChart = new Chart(ctx2, {
        type: 'pie',
        data: data2,
        options: options2
    });
    var myBarChart = new Chart(ctx3, {
        type: 'pie',
        data: data3,
        options: options3
    });
    var myBarChart = new Chart(ctx4, {
        type: 'pie',
        data: data4,
        options: options4
    });
</script>