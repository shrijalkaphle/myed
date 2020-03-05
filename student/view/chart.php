

    <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<?php
    include '../../dbconnect.php';
    $examid = $_GET['examid'];
    $addnum = $_GET['addnum'];
?>

<script>
    google.load('visualization', '1', {packages:['corechart'], callback: drawChart});

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Subject');
        data.addColumn('number', 'Marks');
        data.addColumn({type: 'string', role: 'annotation'});

        data.addRows([
<?php
        $query = "SELECT * FROM marks WHERE addnum = '$addnum' AND examid='$examid'";
        $exec = mysqli_query($conn,$query);
        
        while($rslt = mysqli_fetch_assoc($exec)):
            $subid = $rslt['subjectid'];
            $sqli = "SELECT * FROM course WHERE id = '$subid'";
            $resulti = mysqli_query($conn,$sqli);
            $row = mysqli_fetch_assoc($resulti);
            $total = $rslt['practical'] + $rslt['theory'];
            $cmt = $total;
?>
            ['<?php echo strtoupper($row['course']) ?>',<?php echo $total ?>,'<?php echo strtoupper($cmt) ?>'],
<?php
        endwhile;
?>
        ]);

        var options = {
            // theme: 'material',
            showTextEvery:1,
            title: 'Student Perfermance in Terminal Examination',
            curveType: 'function',
            legend: 'left',
            vAxis: {viewWindowMode: "explicit", viewWindow:{ min: 0, max: 105 }},
            hAxis: {
                slantedText: true,
                slantedTextAngle: 13,
                showTextEvery:1
            },
            pointSize: 5,
            tooltip: { isHtml: true },
            'width':750,
            'height':400,
        };
        var chart = new google.visualization.LineChart(document.getElementById('markchart'));
        chart.draw(data, options);
    }
</script>
<div class="chart"id="markchart"></div>