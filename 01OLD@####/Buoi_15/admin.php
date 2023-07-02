<?php
session_start(); ob_start(); #Khai báo Session

if (isset($_SESSION['username'])) { #Nếu tồn tại session 

    echo 'Xin Chào ' . $_SESSION['username'];
    echo '<a href="admin.php?logout=1">Thoát</a>';

    if (isset($_GET['logout']) && $_GET['logout'] == 1) {
        session_destroy();
        header('Location: login.php');
    }
    
} else {
    header('Location: login.php');
}
