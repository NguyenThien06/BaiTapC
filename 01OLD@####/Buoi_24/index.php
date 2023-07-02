<?php
include 'helper.php';

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

/*----------------------------------------------------------------*/
/*
    limit => số row cần lấy
    offset => vị trí cần lấy
*/

# Lấy thông tin trang
$page = 1;
if (isset($_GET['page']) && $_GET['page'] > 1) {
    $page = (int) $_GET['page'];
}

$limit = 2;
/*
    page = 1 => offset = 0 * 2      (0 - 1) * 2 = 0
    page = 2 => offset = 2 * 2      (2 - 1) * 2 = 2
    page = 3 => offset = 4 * 2      (3 - 1) * 2 = 4
    page = 4 => offset = 6 * 2      (4 - 1) * 2 = 6
*/
$offset = ($page - 1) * $limit;

#Tính tổng số record
$sqlNumrow = "SELECT id from users where is_delete is NULL";
$numRow = $conn->query($sqlNumrow);
$numRow = $numRow->num_rows;
$sumPage = ceil($numRow / $limit); #Tính ra số trang và làm tròn


#Xóa Bảng
#$sql = "DELETE FROM menus";

$sql = "SELECT * from users where is_delete is NULL order by id asc limit $limit offset $offset";
$result = $conn->query($sql);

$html = '
    <style>
        table, tr, td, th {
            border: 1px solid #cdcdcd;
        }
        a {
            display: inline-block;
            margin-right: 10px;
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

$html .= "</tbody>
</table>
<div class='pagination'>".page($sumPage, $page)."</div>
";


echo $html;

/*
    - Tính tổng số trang => dùng for duyệt ra số trang
    - Thêm Đầu = trang 1 
    - Thêm Cuối = tổng trang
    - Về trước = trang - 1 (Kiểm tra trag hiện tại > 1)
    - Về sau = trang + 1 (Kiểm tra trag hiện tại < tổng trang)
    - Vị trí ví dụ là chênh lệch 2 (thay vào for)
        => Bắt đầu => trang hiện tại - 2 (ĐK: THT - 2 > 0 : 1 )
        => Kết thúc => trang hiện tại + 2 (ĐK: THT + 2 > tổng trang : tổng trang )
*/