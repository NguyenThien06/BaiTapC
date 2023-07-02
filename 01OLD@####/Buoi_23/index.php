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

$conn->set_charset('utf8');

// Lấy dữ liệu
/*
    sắp xếp
    điều kiệu
    số lượng row
    user_id

    BT: Đăng ký thành viên
    From nhập username và email
    Đăng ký
        => Kiểm tra username và email có tồn tại trong data hay chưa,
            => Báo lỗi nếu có
        => insert thông tin mới vào data
        => lấy ra 5 user vừa tạo 


        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
*/


// $sql = "SELECT * from users where username = 'admin2' 
//                     && address is NULL && email = 'abc@gmail.com' ";

#asc => tăng dần, default
#desc => giảm dần
#limit => lấy ra số row theo yêu cầu
#offset => vị trí row cần lấy + 1
$sql = "SELECT * from users order by id asc limit 2 offset 8";

$result = $conn->query($sql);


#Đếm số row trả về
echo $result->num_rows; # Cách lấy bằng object 

// fetch_assoc() => trả về tên các trường
// fetch_array() => trả về tên các trường + vị trí

$html = '
    <style>
        table, tr, td, th {
            border: 1px solid #cdcdcd;
        }
    </style>
    <table>
        <thread>    
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>info</th>
                <th>Created</th>
            </tr>
        </thread>
        <tbody>
';

if ($result->num_rows > 0) { # Nếu có dữ liệu trả về
    while ($row = $result->fetch_assoc()) { #Duyệt vô từng row trong data
        $html .= "
            <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['info'] . "</td>
                <td>" . $row['created_at'] . "</td>
            </tr>
        ";
    }
}

$html .= "  </tbody>
</table>";

echo $html;

// $sql = "INSERT into users (username, email, address) 
//         values  ('mradmin', 'abc@gmail.com', '123 ABC'),
//                 ('admin', 'abc@gmail.com', '123 ABC'),
//                 ('admin', 'abc@gmail.com', '123 ABC'),
//                 ('admin', 'abc@gmail.com', '123 ABC')";

// $query = $conn->query($sql);

// var_dump($query);

#Khởi tạo câu lệnh SQL
// $stmp = $conn->prepare("INSERT into users (username, email, address) values (?, ?, ?) ");
// $stmp->bind_param("sss", $username, $email, $address); #Gán kiểu dữ liệu và tham số

// $username = 'admin';
// $email = 'abc1@gmail.com';
// $address = 'abc 123 ';
// $stmp->execute(); #Chạy

// $username = 'admin1';
// $email = 'abc1@gmail.com1';
// $address = '1abc 123 ';
// $stmp->execute(); #Chạy