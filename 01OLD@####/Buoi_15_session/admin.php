<?php 
session_start(); ob_start(); 

if(!isset($_SESSION['username'])){
    header("location: login.php");
}
if(isset($_GET['logout'])){
    session_destroy();
    header("location: login.php");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
</head>
<body>
    <h1>Chào mừng đến trang admin</h1>
    <a href="admin.php?logout=1">Thoát</a>
    <?=  'Xin Chào ' . $_SESSION['username']; ?>
</body>
</html>