<?php
$dbPass = "07775000m";
$dbUser = "mohammed alsadig";
$dbServer = "localhost";
$dbName = "wd_alsadig1";

$connection = new mysqli($dbServer, $dbUser, $dbPass, $dbName);
if ($connection->connect_errno) {
    exit("Database connection failed. reason: " . $connection->connect_error);
}

$forward = $_POST['forward'];
$left = $_POST['left'];
$right = $_POST['right'];


    $query = "INSERT INTO `map`(`forward`, `left`, `right`) VALUES ($forward,$left,$right)";

    echo $_POST['forward'] . " forward" . '<br />';
    echo $_POST['left'] . " left" . '<br />';
    echo $_POST['right'] . " right" . '<br />';


$connection->query($query);
$connection->close();



?>
<!DOCTYPE html>
<html lang="en">
<head></head>
<body style="background: #DCDCDC">
<br>
<br>
<canvas id="myCanvas" width="301px" height="301px" style="border:2px solid black"></canvas>
<script>
    var canvas = document.getElementById('myCanvas');
    var c = canvas.getContext("2d");
    var forward = parseInt(<?php echo $forward?>);
    var left = parseInt(<?php echo $left?>);
    var right = parseInt(<?php echo $right?>);
    var startX = 150;
    var startY = 300;

    c.moveTo(startX, startY);

    if (typeof forward != 'undefined') {
        startY = startY - forward;
        c.lineTo(startX, startY);
        c.stroke();
    }
    if (typeof left != 'undefined') {
        startX = startX - left;
        c.lineTo(startX, startY);
        c.stroke();
    }
    if (typeof right != 'undefined') {
        startX = startX + right;
        c.lineTo(startX, startY);
        c.stroke();
    }


</script>
</body>
</html>