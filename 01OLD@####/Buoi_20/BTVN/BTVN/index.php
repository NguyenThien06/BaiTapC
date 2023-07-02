<?php
/*
    (1): User, Customer, Admin
    User => xem bài viết
    Customer => Thêm sửa
    Admin => toàn quyền 

    Class CURD {} => 4 function tương ứng 4 quyền Thêm, Xem, Sửa - Update, delete

    2 đối tượng là Post và Menu

    ở view tạo form
    Nhập vào tên người dùng, quyền truy cập *(1) 
    và kiểm tra xem có được phép xài tính năng đó hay không
*/

include 'Controller.php';
include 'Roles.php';
include 'Post.php';
include 'Menu.php';

echo 'Phần Sản Phẩm';
$post = new Post(3);
echo $post->start();

echo '<hr>';
echo 'Phần Danh Mục';
$menu = new Menu(5);
echo $menu->start();

