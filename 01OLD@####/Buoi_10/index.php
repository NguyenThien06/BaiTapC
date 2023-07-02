<?php

// echo '<pre>';
// var_dump($_SERVER);

// echo '</pre>';

// $x = strpos("Hello world!", "hello");

// echo str_replace("hello", "Dolly", "Hello world!");

// echo '<hr>';

// $pattern = "/hello/i";

// echo  preg_replace($pattern, "W3Schools", 'Hello world!');

// $str = "Hello world!";

// $pattern = "/hello/i";
// echo preg_match($pattern, $str); // Outputs 1

// // var_dump($x);

// echo '<pre>';

// var_dump($_GET);

// echo '</pre>';


// echo '<pre>';

// var_dump($_POST);

// echo '</pre>';

#Xử lý Form

// $_SERVER['REQUEST_METHOD'];

$err = false; # biến $err không lỗi
$messages = '';
$errorArray = [];

if(isset($_POST['add'])) {
    $email = isset($_POST['email']) ? makeSafe($_POST['email']) : '';
    $password = isset($_POST['password']) ? makeSafe($_POST['password']) : '';
    $soA = isset($_POST['soA']) ? intval($_POST['soA']) : 0; 
    $checkbox = isset($_POST['test']) ? array_values($_POST['test']) : [];


    if ($email == '') {
        $err = true; #Cập nhật biến $err lỗi
        $messages .= 'Email không trống';
        $errorArray['email'] = 'Email không trống';
    }

    #Chỉ có tác dung khi không lỗi => $err = false;
    if (!$err && $password == '') { # Nếu $err không lỗi
        $err = true;
        $messages .= 'Password không trống';
        $errorArray['password'] = 'Password không trống';
    }

    if (!$err && $soA == 0) {
        $err = true;
        $messages .= 'Chọn ít nhất 1 radio';
        $errorArray['soA'] = 'Chọn ít nhất 1 radio';
    }

    if (!$err && count($checkbox) == 0) {
        $err = true;
        $messages .= 'Chọn ít nhất 1 checkbox';
        $errorArray['test'] = 'Chọn ít nhất 1 checkbox';
    }


    if (!$err) {
        echo 'Validate OKE';
    } else {
        echo 'Validate Lỗi';
        echo '<hr>';
        echo $messages;
    }

}


function makeSafe($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// $str = 'this is a \n \"test\"';
// echo $str . "<br />";
// echo stripslashes($str); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="lib/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" >
                        </div>
                        <?=isset($errorArray['email']) ? $errorArray['email'] : ''?>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password"  class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <?=isset($errorArray['password']) ? $errorArray['password'] : ''?>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea id="editor1"  class="form-control" name="content"></textarea>
                        </div>
                        
                    </div> 


                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Radio</label>
                        <div class="col-sm-10">
                            <input type="radio" name="soA" value="1"> Số B
                            <input type="radio" name="soA" value="2"> Số B
                        </div>
                        <?=isset($errorArray['soA']) ? $errorArray['soA'] : ''?>
                    </div> 

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Checkbox</label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="test[]" value="1"> Toán
                            <input type="checkbox" name="test[]" value="2"> Lý
                            <input type="checkbox" name="test[]" value="3"> Hóa
                            <input type="checkbox" name="test[]" value="4"> Văn
                            <input type="checkbox" name="test[]" value="5"> Sử
                            <input type="checkbox" name="test[]" value="6"> Địa
                        </div>
                        <?=isset($errorArray['test']) ? $errorArray['test'] : ''?>
                    </div> 

                    
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Select Option</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="select[]" multiple>
                                <option value="1">Quảng Ngãi</option>
                                <option value="2">Sài Gòn</option>
                                <option value="3">Đà Nẳng</option>
                                <option value="4">Hà Nội</option>
                            </select>
                        </div>
                    </div> 



                    <input type="submit" name="add" value="Send Info">
                </form>

            </div>    
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>
</html>