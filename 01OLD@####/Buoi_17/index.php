<?php

function tinhLuong(int $soNgay, int $mucluong)
{
    if ($soNgay <= 0 || $mucluong <= 0) {
        throw new Exception('Kế toán vui lòng kiểm tra lại thông số', 500);
    }

    return $soNgay * $mucluong;
}


try { #Chương trình đang chạy
    echo tinhLuong(1, 20);
    echo 123;
} catch (Exception $ex) { # Khi khối ({}) có lỗi thì catch sẽ nhận thông tin lỗi đó
    include 'errors.php';

    // $code = $ex->getCode();
    // $message = $ex->getMessage();
    // $file = $ex->getFile();
    // $line = $ex->getLine();
    // echo "Exception thrown in $file on line $line: [Code $code]
    // $message";
}
finally { #Dù có lỗi hay không đều chạy
   # echo tinhLuong(20, 20);
}
