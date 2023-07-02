<?php

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


# Update dữ liệu và Delete
# Lưu ý nhớ Điều Kiện

#Update
#$sql = "UPDATE users set username = 'adminABC', email = 'abcEmail@gmail.com' where id = 1";

#$sql = "DELETE from users where id = 1";

$sql = "UPDATE users set is_delete = 1 where id = 3";

$conn->query($sql);
