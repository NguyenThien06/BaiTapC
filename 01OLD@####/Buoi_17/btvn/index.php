<?php

/*
    Bài Tập
    Tính chu vi, diện tích hình chữ nhật và hình vuông.
    => Để tính được chu vi và diện  cần biết được chiều dài và rộng
    => Để lấy được chiều dài và chiều rộng => phải tạo form để người dùng nhập
    => Sau khi có được thông tin thì gửi lên server tính
    => Tính xong trả về kết quả

    Xuất kết quả vừa tính
    => nhập dữ liệu gọi lên API => json
    => API nhận thông tin => xử lý trả về kết quả
    => fontend append kết quả
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTVN</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label>Chiều Dài</label>
            <input type="text" name="chieudai" id="chieudai">
        </div>

        <div>
            <label>Chiều Rộng</label>
            <input type="text" name="chieurong" id="chieurong">
        </div>

        <div>
            <label>Hình Dáng</label>
            <select name="hinhdang" id="hinhdang">
                <option value="1">Hình Chữ Nhật</option>
                <option value="2">Hình Vuông</option>
            </select>
        </div>


        <div>
            <button type="button" onclick="tinh()">Tính Kết Quả</button>
        </div>
    </form>

    <div id="kq">
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>
</html>