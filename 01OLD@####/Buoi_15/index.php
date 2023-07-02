<?php
session_start(); ob_start(); #Khai báo Session
date_default_timezone_set('Asia/Ho_Chi_Minh');

include 'config.php';

function makeSafe($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { #Nhận dữ liệu
    $username = isset($_POST['username']) ? makeSafe($_POST['username']) : '';
    $password = isset($_POST['password']) ? makeSafe($_POST['password']) : '';

    #VALIDATE

    #Kiểm tra
    if ($username == $usernameAdmin && $password == $passwordAdmin) {
        $_SESSION['username'] = $username;
        header('Location: admin.php');
    } else {
        header('Location: login.php');
    }
} else { #Phương thức GET
    if (isset($_SESSION['username'])) {
        header('Location: admin.php');
    } else {
        header('Location: login.php');
    }
}

/*
    1. Cookie
        Tạo Cookie,
        Kiểm tra
        Nhận Cookie
        Xóa Cookie
    2. Sesion
        Tạo Sesion,
        Kiểm tra
        Nhận Sesion
        Xóa Sesion
    => Viết 1 tính năng Login và Logout
    => Xài data .log hoặc gán 1 value mặt định
*/
# header('Location: admin.php');

#Tạo cookie
#$user = 'admin';
#$time = 84600 * 30; # 30 Ngày

#setcookie('username', $user, time() + $time); #Thời gian hiện tại + 30 ngày
#Cookie được lưu trên trình duyệt web

#Lấy Cookie
#echo $_COOKIE['username'];

#Xóa Cookie
#setcookie('username', $user, time() - 3600); 

// SESSION

#$_SESSION['username'] = 'admin';
#$_SESSION['password'] = '123456';
#$_SESSION['active']   = 1;

#Khai báo Session, và được lưu ở Server

#echo $_SESSION['username'];

#unset($_SESSION['active']);

#session_unset();
#Xóa nội dung bên trong file Session


#session_destroy();
# Xóa file session trong server

/*
    Tạo form đăng nhập, sử dụng data ở config.php
    Nếu chưa đăng nhập => hiển thị form đăng nhập
    Sau khi đăng nhập xong thì ẩn form và hiển thị thông tin 'Xin chào Admin'
    Nếu vào lại trang đăng nhập => chuyển trang vào admin
*/