<?php

/*
1 Một số câu lệnh trong MySql join group having
2 Giới thiệu về layout master
3 Giới thiệu về MVC

Controller là xử lý thông tin điều hướng
Model dùng để lấy dữ liệu từ Data
View phần giao diện người dùng


*/

$servername = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'php_08_03';

#Kết nối Data
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    echo $conn->connect_error; #Thuộc tính lỗi connect
} else {
    echo 'Kết nối thành công';
    echo '<hr>';
}
$conn->set_charset('utf8');

$sql = "SELECT users.*, carts.user_id, carts.product, carts.price, carts.id as cart_id 
        from users join carts 
        on users.id = carts.user_id 
        order by carts.id desc ";

// $sqlGroup = "SELECT COUNT(id) as sl, username 
//             FROM `users` 
//             group by username";

// $sqlHaving = "SELECT COUNT(id) as sl, username FROM `users` group by username HAVING sl > 2 ";

$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) { 
        echo '<pre>';
        var_dump($row);
        echo '</pre>';
    }
}