<?php
    $fp = fopen('data.log', 'r');

    $data = [];
    while (! feof($fp)) {
        $line = trim(fgets($fp));

        if ($line != '') {
            $data[] = $line;
        }
    }
    fclose($fp);


    #Xóa Ảnh
    if (isset($_GET['delete']) && $_GET['delete'] != '') {
        $link = $_GET['delete'];

        #var_dump(file_exists($link)); #Kiểm tra có tồn tại file

        if (file_exists($link)) { #Nếu tồn tại file trong thư mục
            unlink($link); #Xóa file

            #Xử lý DATA và cập nhật
            foreach ($data as $key => $value) {
                if ($value == $link) { #Nếu từng line trong data = với link xóa
                    unset($data[$key]); #Xóa phần tử trong mảng
                    break;
                }
            }

            $fp = fopen('data.log', 'w+');
            fwrite($fp, implode("\n", $data) . "\n"); #implode => chuyển mảng thành chuỗi và ghi Data
            fclose($fp);

            #Chuyển trang
            #header('location: list.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Hình Ảnh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($data as $key => $value) { ?>
            <div class="col-md-3">
                <a href="<?=$value?>" target="_blank">
                    <img src="<?=$value?>">
                </a>
                <a href="?delete=<?=$value?>">Xóa Ảnh</a>
            </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>