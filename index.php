<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>map control panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:#483D8B">
<div class="jumbotron text-center" style="background:#00CED1 ">
<h1 style="text-transform: uppercase; color: black" > robot guide map </h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        <form action="mapDb.php" method="post" style="text-transform: uppercase; color: black">
    <lable>forward</lable>
    <br>
    <input type="text"  name="forward" value="">
    <br> <br>
    <lable>left</lable>
    <br>
    <input type="text"  name="left" value="">
    <br> <br>
    <lable>right</lable>
    <br>
    <input type="text"  name="right" value="">
    <br> <br>
    <input type="submit" name="submit" value="submit" style="text-transform: uppercase">
    <br>
</form>
<br> <br>
<br> <br>
        </div>
</body>
</html>