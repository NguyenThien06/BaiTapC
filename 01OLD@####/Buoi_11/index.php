<?php
    #Kiểm tra phương thức gọi
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = isset($_POST['username']) ? $_POST['username'] : '';

        #var_dump(preg_match("/^[a-zA-Z-0-9]*$/", $name)); #Check không dấu, không ký tự đặc biệt

        // if (!preg_match("/^[a-zA-Z-0-9]*$/", $name)) { # 0 => fasle, 1 => true
        //     echo 'Lỗi';
        // }

        #var_dump(filter_var($name, FILTER_VALIDATE_EMAIL)); #Trả về false nếu k đúng định email
        # Ngược lại trả về Email
        // if (!filter_var($name, FILTER_VALIDATE_EMAIL)) {
        //     echo 'Lỗi Email';
        // }


        // var_dump(filter_var($name, FILTER_VALIDATE_URL));

        echo '<pre>';
        var_dump($_FILES);
        echo '</pre>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buoi 11</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" id="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">File Ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" name="ACB[]" class="form-control" multiple>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label=class="col-sm-2 col-form-label">&nbsp;</label>
                        <div class="col-sm-10">
                            <button class="form-control" type="submit">CHECK ERROR</button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>