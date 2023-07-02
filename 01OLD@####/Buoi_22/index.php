<?php
#Kết nối
#mysql_connect(); # <= 5.6 => function
#mysqli() => class obj
#PDO

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
#Set chartset
$conn->set_charset('utf8');



#create table
// $sql = "CREATE Table users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username varchar(255) not null,
//     email varchar(255) not null,
//     address varchar(255) null,
//     info text ,
//     created_at TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";


// $sql = "CREATE table carts (
//     id INT(255) AUTO_INCREMENT PRIMARY KEY,
//     user_id int(255) not null,
//     product varchar(255) not null,
//     price int(255)
// )";


$sql = "INSERT into users (username, email, address) 
        values ('admin', 'abc@gmail.com', '123 ABC')";

$query = $conn->query($sql);

var_dump($query);

$userId = (int) $conn->insert_id; #Lấy id vừa chèn
$productName = "Nước Hoa Nam";

$sqlCart = "INSERT into carts (user_id, product, price) 
        values ($userId, '$productName', 250000) ";
$conn->query($sqlCart);
/*
    Bảng khách hàng => lấy id khách hàng
    Bảng đơn hàng của khách hàng => insert vào bảng
/*


#$conn->close(); # Đóng kết nối

// $sql = "DROP database php_08_03"; #Câu sql tạo cơ sở dữ liệu
// $query = $conn->query($sql); #Thực thi câu query
// if (!$query) {
//     echo $conn->error;
// } else {
//     echo 'Chạy thành công';
// }

#Kết nối bằng function ---------------------

/*
$conn = mysqli_connect($servername, $username, $password);
$sql = "DROP database php_08_03";
mysqli_query($conn, $sql);
*/