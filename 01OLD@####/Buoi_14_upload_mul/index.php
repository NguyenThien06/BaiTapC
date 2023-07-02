<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh'); #Set múi giờ

    include 'function.php'; #Load file function.php

    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';
   

    /*
        - Kiểm tra file có trống hay không
        - Kiểm tra phải là file ảnh hay không (Không upload Ảnh thì bỏ qua)
        - Dung lượng cho phép upload
        - Kiểm tra file đã tồn tại hay chưa
        - Kiểm tra định dạng (jpg, jpeg, png, gif...)
        - .....
        - Upload file trả về link


        ---- UPDATE ---
        1. Tự động tạo ra thư mục ngày tháng năm khi Upload
        
        2. Danh Sách File (Lấy ra link): Log upload.txt
            - Khi upload thành công thì ghi link ảnh vào file upload.txt
            - Xuất ra danh sách file ảnh vừa upload (dự vào file upload.txt)

        3. Upload nhiều file
        4. Xóa file ảnh

    */

    $err = false; #Kỹ thuật gắn cờ
    $messages = '';
    $path = getFolder(); // Cài đặt đường dẫn thư mục lưu file

    if (isset($_POST['upload'])) { // Kiểm tra tồn tại nút upload

        foreach ($_FILES['file']['name'] as $key => $value) {
            // var_dump($value);
            // var_dump($_FILES['file']['type'][$key]);
            // var_dump($_FILES['file']['tmp_name'][$key]);
            // var_dump($_FILES['file']['error'][$key]);
            // var_dump($_FILES['file']['size'][$key]);
            
            $fileName = basename($value); # Lấy tên file
 
            #Kiểm tra file có trống hay không
            if ($fileName == '') {
                $messages .= 'Vui lòng chọn file Ảnh';
                $err = true;
            }
    
            # Chỉ áp dụng cho hình ảnh
            if (!$err) { #nếu biến err không có lỗi
                #Kiểm tra phải là file ảnh hay không
                $isImage = getimagesize($_FILES['file']['tmp_name'][$key]);
                if ($isImage === false) {
                    $messages .= 'File Ảnh không đúng định dạng';
                    $err = true;
                }
            }
    
            if (!$err) {
                #Dung lượng cho phép upload, đơn vị hiện tại là byte 1kb = 1024 byte, 10kb => 10240
                #Chỉ cho phép file ảnh <= 5M, 
                /*  1kb => 1024,  
                    10kb => 10240,
                    100kb => 102400,
                    1000kb => 1024000
                    5000kb => 5m => 5*1024000 = 5120000
                */
    
                if ($_FILES['file']['size'][$key] > 5120000) {
                    $messages .= 'File ảnh phải nhỏ hơn 5M';
                    $err = true;
                }
            }
    
            #Kiểm tra file đã tồn tại hay chưa
            if (!$err) {
                $pathFull = $path . '/' . $fileName;
                if (file_exists($pathFull)) {  #kiểm tra tồn tại file
                    $pathFull = $path . '/' . time() . '-' . $fileName;
                }
            }
    
            # Kiểm tra định dạng (jpg, jpeg, png, gif...)
            if (!$err) {
                #Lấy định dạng file và chuyển chữ hoa thành thường
                $type = strtolower(pathinfo($pathFull, PATHINFO_EXTENSION));
                
                $typeArray = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
                if (in_array($type, $typeArray) === false) { #Kiểm tra type có trong mảng hay không
                    $messages .= "Định dạng không được phép Upload";
                    $err = true;
                } 
            }
    
            if (!$err) {
                #Nếu tất cả không lỗi => upload File
                if (move_uploaded_file($_FILES['file']['tmp_name'][$key], $pathFull)) {
                    $messages .= 'Upload thành công';
                    $images = '<img src="' . $pathFull . '" width="100px">';
    
                    writeLog($pathFull ."\n"); #Ghi log data URL
    
                } else {
                    $messages .= 'Upload Lỗi';
                }
            }

            $err = false;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h2><?=$messages?></h2>
    <p><?=isset($images) ? $images : '' ?></p>

    <form action="" method="POST" enctype="multipart/form-data">
        <label>Chọn File:</label>
        <input type="file" name="file[]" multiple>

        <br/><br/>

        <input type="submit" name="upload" value="Upload File">
    </form>
</body>
</html>