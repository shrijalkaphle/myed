
<?php
    error_reporting(0);
    ini_set('display_errors', 0);

    $id = $_GET['id'];
    include '../../dbconnect.php';
    
    
    $sql = "SELECT * FROM course WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($result);
    $grades = explode(",", $data['grade']);
    $all = array(1,2,3,4,5,6,7,8,10);

?>
<button onclick="myFun()" class="btn btn-primary" style="float:right">Edit Course Details</button><br>
<form method="post" id="editForm">
<input name="cid" id="cid" value="<?php echo $data['id'] ?>" type="text" hidden>
    <div class="form-row">
        <div class="col-md-5">
            <div class="position-relative form-group">
                <label for="name" class="">Subject Name</label>
                <input name="name" id="name" value="<?php echo $data['course'] ?>" type="text" class="form-control" required>
            </div>
        </div>
        <div class="col-md-7"></div>
    </div>
    <div class="form-row">
        <div class="col-md-4">
            <div class="position-relative form-group">
                <label for="fullmark" class="">Full Mark</label>
                <input name="fullmark" id="fullmark" value="<?php echo $data['fullmark'] ?>" type="number" class="form-control" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="position-relative form-group">
                <label for="theory" class="">Theory</label>
                <input name="theory" id="theory" value="<?php echo $data['theory'] ?>" type="number" class="form-control" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="position-relative form-group">
                <label for="practical" class="">Practical</label>
                <input name="practical" id="practical" value="<?php echo $data['practical'] ?>" type="number" class="form-control">
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
            <input type="checkbox" id="class1" name="class1" <?php if(in_array('1',$grades)) { ?> checked <?php } ?> value="1">
            <label for="class1">Class One&nbsp;&nbsp;</label>
            <input type="checkbox" id="class2" name="class2" <?php if(in_array('2',$grades)) { ?> checked <?php } ?> value="2">
            <label for="vehicle1">Class Two&nbsp;&nbsp;</label>
            <input type="checkbox" id="class3" name="class3" <?php if(in_array('3',$grades)) { ?> checked <?php } ?> value="3">
            <label for="vehicle1">Class Three&nbsp;&nbsp;</label>
            <input type="checkbox" id="class4" name="class4" <?php if(in_array('4',$grades)) { ?> checked <?php } ?> value="4">
            <label for="vehicle1">Class Four&nbsp;&nbsp;</label>
            <input type="checkbox" id="class5" name="class5"  <?php if(in_array('5',$grades)) { ?> checked <?php } ?> value="5">
            <label for="vehicle1">Class Five&nbsp;&nbsp;</label>
            <input type="checkbox" id="class6" name="class6" <?php if(in_array('6',$grades)) { ?> checked <?php } ?> value="6">
            <label for="vehicle1">Class Six&nbsp;&nbsp;</label>
            <input type="checkbox" id="class7" name="class7" <?php if(in_array('7',$grades)) { ?> checked <?php } ?> value="7">
            <label for="vehicle1">Class Seven&nbsp;&nbsp;</label><br>
            <input type="checkbox" id="class8" name="class8" <?php if(in_array('8',$grades)) { ?> checked <?php } ?> value="8">
            <label for="vehicle1">Class Eight&nbsp;&nbsp;</label>
            <input type="checkbox" id="class9" name="class9" <?php if(in_array('9',$grades)) { ?> checked <?php } ?> value="9">
            <label for="vehicle1">Class Nine&nbsp;&nbsp;</label>
            <input type="checkbox" id="class10" name="class10" <?php if(in_array('10',$grades)) { ?> checked <?php } ?> value="10">
            <label for="vehicle1">Class Ten&nbsp;&nbsp;</label>
        </div>
    </div>
    <br>
    <center><input type="submit" value="Update Course" name="update" class="mt-2 btn btn-primary"></center>
    </div>
    </div>
</form>

<script>
    function myFun() {
        $("#editForm :input").prop("disabled",false);
    }
   
    $("#editForm :input").prop("disabled",true);
    $("#allCheck").prop("checked",true);

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