<?php

// $array = [
//     1,4,5,3,6,8,5,1
// ];

// $array = [
//     'name' => 11,
//     'address' => 22,
//     'abe'   => 18
// ];

# a => value
# k => key
# sort() => tăng default
# r  => giảm


#sort($array); #Sắp xếp mảng tăng dần

#rsort($array); #Sắp xếp mảng giảm dần

#asort($array); #Sắp xếp mảng có value => tăng dần

#ksort($array); # sắp xếp theo key tăng dần

#arsort($array); #Sắp xếp theo value giảm dần

// krsort($array); #Sắp xếp theo key giảm dần

// $count = count($array);

// echo end($array); #Lấy phần tử cuối cùng trong mảng

// echo '<hr >';

// foreach ($array as $key => $value) {
//     echo $key . " -- " . $value . ' |';
// }


// $option['cache'] = true;
// $config['DEBUG'] = true;
// function loadConfig()
// {
//     // global $config;

//     $cache = $GLOBALS['option'];
//     $configsdsdsd = $GLOBALS['config'];

//     return $configsdsdsd['DEBUG'];
// }

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

// echo '<pre>';
// var_dump($_SERVER['REQUEST_METHOD']);
// echo '</pre>';

// TEST request

// echo '<pre>';

// var_dump($_REQUEST);

// echo '</pre>';


// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

//echo $_GET['page'];

// isset() Function kiểm tra tồn tại hay không
// echo isset($_GET['page']) ? $_GET['page'] : 1;

// GET
/*  Gửi thông tin lên URL
    Gửi theo key=value. ví dụ name=Nguyễn Văn A
    Mỗi cặp key=value nối nhau bởi ký tự &. Ví dụ: name=Nguyễn Văn A&address=758 Phạm Văn Chiêu
    Bắt buộc ký tự ? phải nằm đầu tiên trong cặp key=value (Query String). 
    -  Ví dụ: http://abc.com/index.php?name=Nguyễn Văn A&address=758 Phạm Văn Chiêu
            hoặc http://abc.com/?name=Nguyễn Văn A&address=758 Phạm Văn Chiêu
    Dữ liệu có thể nhìn thấy được

    Cách lấy dữ liệu bằng $_GET (ÁP dụng với phương thức (method) GET)
    - $_GET trả về array
*/


//' POST
/* 
    Gửi thông tin lên header của trình duyệt
    Không lộ thông tin
    Lấy dữ liệu bằng $_POST['key'] . key => name của input

*/
/*
    So Sánh giữ GET và POST
    - Điểm chung: Đều gửi và nhận dữ liệu

    - Khác Nhau
    GET: gửi thông tin lên URL - POST gửi lên header
    GET: lộ thông tin   - POST thì không
    GET: Bị giới hạn số ký tự (2048) gửi lên URL - POST thì không
    => POST dùng để gửi dữ liệu => GET => lấy dữ liệu => search, phân trang length url < 2048 ký tự
    => GET không gửi ảnh được từ form => POST gửi FIle lên server => đưa vào bộ nhớ tạm 

*/


echo '<pre>';
var_dump($_POST);
echo '</pre>';

if (isset($_POST['login'])) {
    echo 'Đăng Nhập';
} else if (isset($_POST['register'])) {
    echo 'Đăng Ký';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- FORM có 2 phương thức là GET và POST -->
                <form action="" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" name="city" class="form-control" id="inputCity">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" name="select" class="form-control">
                                <option value="1" selected>Choose...</option>
                                <option value="2">...</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" name="zip" class="form-control" id="inputZip">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="check" value="1" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>

                    <!-- <button type="submit" class="btn btn-primary">Sign in</button>
                    <button type="submit" class="btn btn-primary">Đăng Ký</button> -->

                    <input type="submit" name="login" value="Đăng Nhập">
                    <input type="submit" name="register" value="Đăng Ký">
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>