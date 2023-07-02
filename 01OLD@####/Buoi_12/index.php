<?php
/*
    1. Mở File (fopent)
    2. Đọc File từng dòng (fgets), ký tự (fgetc) hoặc tất cả (fread)
    3. Tạo file
    4. Cập nhật dữ liệu của File
    5. Ghi File
    ...

    r => Mở một tệp chỉ để đọc. Con trỏ tệp bắt đầu ở đầu tệp
    w => Chỉ mở tệp để ghi. Xóa nội dung của tệp hoặc tạo tệp mới nếu nó không tồn tại. Con trỏ tệp bắt đầu ở đầu tệp
    a => Mở tệp chỉ để ghi. Dữ liệu hiện có trong tệp được giữ nguyên. Con trỏ tệp bắt đầu ở cuối tệp. Tạo tệp mới nếu tệp không tồn tại
    
    x  => Tạo một tệp mới chỉ để ghi. Trả về FALSE và lỗi nếu tệp đã tồn tại
    
    r+ => Mở tệp để đọc / ghi. Con trỏ tệp bắt đầu ở đầu tệp
    w+ => Mở tệp để đọc / ghi. Xóa nội dung của tệp hoặc tạo tệp mới nếu nó không tồn tại. Con trỏ tệp bắt đầu ở đầu tệp
    a+ => Mở tệp để đọc / ghi. Dữ liệu hiện có trong tệp được giữ nguyên. Con trỏ tệp bắt đầu ở cuối tệp. Tạo tệp mới nếu tệp không tồn tại
*/

#$content = readfile('demo.txt'); //Đọc toàn bộ file

#var_dump(filesize('demo.txt'));

// $fp = fopen('demo.txt', 'r'); // Mở file với quyền read

// echo fread($fp, filesize('demo.txt')); // Đọc file vừa mở, đọc toàn bộ file
//echo fgets($fp); // Đọc từng dòng 

# feof($fp) => Hỏi là con trỏ đã ở cuối file chưa

// while (!feof($fp)) { #nếu con trỏ chưa nằm cuối file
//     echo fgets($fp) . "<br />"; #Đọc từng dòng
// }

// while (!feof($fp)) { #nếu con trỏ chưa nằm cuối file
//     echo fgetc($fp) . "<br />"; #Đọc từng ký tự
// }


// fclose($fp); // Đóng file


// $fp = fopen('test.txt', 'a+');

// $html = 'Hello CÔ Ba 3' . "\r\n";

//fwrite($fp, $html); // Ghi file

// echo fread($fp, filesize('test.txt'));

# trim() => xóa bỏ khoảng trắng 2 bên

// $fp = fopen('demo.txt', 'r');
// while (! feof($fp)) {
    // echo fgets($fp) . " <br />";

    // $line = explode("|", fgets($fp)); // Chuyển 1 chuỗi sang 1 mảng với 1 ký tự bất kỳ

    // foreach ($line as $key => $val) {
    //     echo trim($val) . "<br />"; 
    // }

    // echo implode(" || ", $line); #chuyển mảng => chuỗi
    
    // break;

    // echo '<pre>';
    // var_dump($line);
    // echo '</pre>';
    // break;
// }


/*
    1|Hướng dẫn seo 1|http://google.com
    2|Hướng dẫn seo 2|http://google.com
    3|Hướng dẫn seo 3|http://google.com
    4|Hướng dẫn seo 4|http://google.com
    5|Hướng dẫn seo 5|http://google.com
    6|Hướng dẫn seo 6|http://google.com
    7|Hướng dẫn seo 7|http://google.com
    
    explode("\n", fgets($fp))

    1. Xuất ra dạng bảng tương ứng
        - Đọc file xuất ra Bảng
    2. Nút edit và delete
        - Nếu kích vào edit thì có dạng: index.php?edit=1&id=1
        - Nếu kích vào delete thì có dạng: index.php?delete=1&id=1
        => id => 1 -> 7
    3. Nếu kích vào edit hoặc delete thì ghi lại Log thời gian thực hiện (Lưu ý không được tạo trước)
        - Tên file => Năm tháng ngày.txt
        - Y-m-d H:i:s : Vừa xóa ID: 1
    4. Nếu xóa => xóa luôn nội dung trong .txt
        - Ví dụ xóa ID = 7 thì xóa luôn trong .txt
*/