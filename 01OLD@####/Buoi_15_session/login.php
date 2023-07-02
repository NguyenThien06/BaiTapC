<?php

include 'config.php';


#if (isset($_SESSION['username'])) {
#    header('Location: admin.php');
#}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <label>Tên Đăng Nhập</label>
            <input type="text" name="username">
        </div>

        <div>
            <label>Mật Khẩu</label>
            <input type="password" name="password">
        </div>

        <button type="submit">Đăng Nhập</button>
    </form>
</body>
</html>