<?php

$fp = fopen('data.txt', 'a+');

$array = []; #Tạo 1 mảng 
while (! feof($fp)) {
    $line = explode("|", fgets($fp)); # cắt chuỗi chuyển sang mảng

    $array[] = $line; # thêm mảng mới
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php
    echo '<pre>';
        var_dump($array);

        //unset();// Xóa phần tử trong mảng
    echo '</pre>';
?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Link</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($array as $key => $value) { ?>
                <tr>
                   <td><?=$value[0]?></td>
                   <td><?=$value[1]?></td>
                   <td><?=$value[2]?></td>
                   <td>
                        <a href="">Sửa</a>
                        <a href="?delete=1&id=<?=$value[0]?>">Xóa</a>
                   </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>