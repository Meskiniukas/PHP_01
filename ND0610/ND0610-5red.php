<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red</title>
    <style>
    body{
        background-color: red;
    }
    </style>
</head>
<body>
<h1>RED</h1>
    <a href="?page=1">Change to blue</a>
</body>
</html>
<?php
if(isset($_GET['page'])==1){
    header('Location: http://localhost/barsukas/ND0610/ND0610-5blue.php'); // get
    die;
}