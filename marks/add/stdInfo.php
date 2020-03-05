<?php
    include '../../dbconnect.php';

    $addno = $_GET['addno'];
    // $addno = 'b22';
    $query = "SELECT * FROM student WHERE addnum = '$addno'";
    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if ($num != 0) {
        $data = mysqli_fetch_assoc($result);
?>
    <br>
    <div style="border: 0px solid black; width:500px;display: inline-block"><label class="">Name : <?php echo $data['name'] ?></label></div><br>
    <div style="border: 0px solid black; width:500px;display: inline-block"><label class="ofset">Class : <?php echo $data['grade'] ?></label></div>

    <form method="post">
        <input type="hidden" name="addnum" id="addnum" value="<?php echo $data['addnum'] ?>"/>
        <center>
            <input type="number" style="width:90px" placeholder="Terminal" name="term" class="form-control custom-control-inline">
            <b>Terminal Examination</b>
        </center>
        <br><br>
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class=""><b>Subject</b></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative form-group">
                    <label class=""><b>Practical</b></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative form-group">
                    <label class=""><b>Theory</b></label>
                </div>
            </div>
        </div>
        <?php
            $grade = '%'.word_digit(strtolower($data['grade'])).'%';
            $sqly = "SELECT * FROM course WHERE grade LIKE '$grade'";
            $resulty = mysqli_query($conn,$sqly);
            $i = 0;
            while($row = mysqli_fetch_assoc($resulty)):
        ?>
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class=""><?php echo strtoupper($row['course']) ?></label>
                    <input name="sub<?php echo $i ?>" id="sub<?php echo $i ?>" value="<?php echo $row['id'] ?>" type="hidden">
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative form-group">
                    <input name="sub<?php echo $i ?>_pr" type="number" oninput="maxCheck(this,<?php echo $row['practical'] ?>)" placeholder="Practical" class="form-control" <?php if($row['practical'] == 0 ) { ?> value='0' readonly="readonly" <?php } ?>>
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative form-group">
                    <input name="sub<?php echo $i ?>_th" id="sub<?php echo $i ?>_th" oninput="maxCheck(this,<?php echo $row['theory'] ?>)" placeholder="Theory" type="number" class="form-control" required>
                </div>
            </div>
        </div>
        <?php
            $i++;
            endwhile;
        ?>
        <input type="hidden" name="totalSubject" value="<?php echo $i ?>">
        <center><input type="submit" value="Add Marks" name="add" class="mt-2 btn btn-primary"></center>
    </form>
<?php
} else {
?>
    <script>
        alert('No Student with this addmission Number');
    </script>
<?php
}

function word_digit($word) {
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;    
        }
    }
    return $result;
}

?>