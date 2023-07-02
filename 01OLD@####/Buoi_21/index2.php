<?php
    include 'a/DongVat.php';
    include 'b/DongVat.php';

    use a\c\d\e\f\g\h\DongVat as DVA;

    $dongvatA = new DVA();
    echo $dongvatA->abc();

    echo '<hr>';

    $dongvatB = new b\DongVat();
    echo $dongvatB->abc();
/*
    Tính năng đăng nhập
    => Session 
    => Cookie => Auth
    -> Bàn giao cho Nguyễn Văn A
    

    Tính năng giỏ hàng
    => Session 
    => Cookie => Auth

    => Khi chạy 
        => Bạn đã đăng nhập chưa => Auth
        => Bạn đã đặt hàng chưa => Auth

    => Trong 1 thư mục không thể nào có 2 file trùng tên
    - App\Cart\Auth
    - App\User\Auth

    => namespace App\Cart\Auth;
    => namespace App\User\Auth;

    => App\Cart\Auth::login();
    => App\User\Auth::login();
*/
