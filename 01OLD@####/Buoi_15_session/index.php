<?php  session_start(); ob_start();

include "config.php";




function makeSafe($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//lấy dữ liệu từ trang login
$username = "";
$password = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['username']) ){
        $username = makeSafe($_POST['username']);
    }
    if(isset($_POST['password']) ){
        $password = makeSafe($_POST['password']);
    }

    
   
    echo $username;
    echo $password;

    if($username == $usernameAdmin && $password == $passwordAdmin){
        $_SESSION['username'] = $username;
        header("location: admin.php");
    } else {
        header("location: login.php");
    }
}else{
    if(isset($_SESSION['username'])){
        header("location: admin.php");
    }else{
        header("location: login.php");
    }
}






?>

