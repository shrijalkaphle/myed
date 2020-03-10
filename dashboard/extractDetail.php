<?php
include "../dbconnect.php";

$content = null;

if(isset($_POST['info'])) {
    $content = $_POST['info'];
}

if (strtolower($content) == 'male' || strtolower($content) == 'female') {
    $gender = strtolower($content);
    $query = "SELECT * FROM student WHERE gender = '$gender'";
    $result = mysqli_query($conn, $query);
} else if (strtolower($content) == 'unhealthy') {
    $query = "SELECT * FROM student INNER JOIN healthstatus ON student.addnum = healthstatus.addnum WHERE healthstatus.isSick = 1";
    $result = mysqli_query($conn, $query);
} else if (strtolower($content) == 'recovered') {
    $query = "SELECT * FROM student INNER JOIN healthstatus ON student.addnum = healthstatus.addnum WHERE healthstatus.isSick = 0 AND healthstatus.status = 1";
    $result = mysqli_query($conn, $query);
} else if (strtolower($content) == 'healthy') {
    $query = "SELECT * FROM student WHERE addnum NOT IN(SELECT addnum FROM healthstatus WHERE status = 1)";
    $result = mysqli_query($conn, $query);
} else if (strtolower($content) == 'pass') {
    $query = "SELECT * FROM student INNER JOIN graph ON student.addnum = graph.addnum WHERE graph.pass = 1";
    $result = mysqli_query($conn, $query);
} else if (strtolower($content) == 'pass') {
    $query = "SELECT * FROM student INNER JOIN graph ON student.addnum = graph.addnum WHERE graph.pass = 0";
    $result = mysqli_query($conn, $query);
} else if (isTalent($content)) {
    $talent = strtolower($content);
    $query = "SELECT * FROM student WHERE talent = '$talent'";
    $result = mysqli_query($conn, $query);
    // echo $query;
} else {
    $query = "SELECT * FROM student ORDER BY updatetime DESC LIMIT 5";
    $result = mysqli_query($conn, $query);
}

function isTalent ($tal) {
    $arr = array('academics','sports','arts','musics','others');
    if(in_array(strtolower($tal),$arr)) {
        return 1;
    } else {
        return 0;
    }
}

// echo $query;
?>

<div class="main-card mb-3 card">
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
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) :
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
                            <a href="../student/view/<?php echo $row['id'] ?>"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button></a>
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