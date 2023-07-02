<?php
    include 'connect.php';

    function makeSafe($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $username = isset($_POST['username']) ? makeSafe($_POST['username']) : '';
        $email = isset($_POST['email']) ? makeSafe($_POST['email']) : '';

        if ($username == '' || $email == '') {
            echo 'Vui lòng nhập đầy đủ thông tin';
        } else {
            
            $sql = "SELECT * from users where username = '$username' && email = '$email' ";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                echo 'Đã tồn tại thông tin';
            } else {
                $sqlInsert = "INSERT into users (username, email, address) 
                         values  ('$username', '$email', '123 ABC')";
                $result = $conn->query($sqlInsert);

                var_dump($result);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="username"> <br >
        <input type="email" name="email"> <br />

        <button type="submit">Đăng Ký</button>
    </form>
</body>
</html>