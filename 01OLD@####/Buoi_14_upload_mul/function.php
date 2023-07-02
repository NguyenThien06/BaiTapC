<?php

function getFolderOld($path = 'uploads')
{
    /*
        Kiểm tra thư mục năm hiện tại, nếu không có thư mục => Tạo thư mục
        Kiểm tra thư mục tháng hiện tại (nằm bên trong thư mục Năm) => Tạo thư mục
        Kiểm tra thư mục ngày hiện tại (nằm trong Tháng) => Tạo thư mục
    */

    $year   = date("Y"); # Lấy năm hiện tại
    $month  = date("m"); # Lấy tháng hiện tại
    $day    = date("d"); # Lấy ngày hiện tại

    $path = $path . '/' . $year; #Gán năm vào đường dẫn thư mục uploads
    #is_dir($path) Kiểm tra tồn tại file hoặc thư mục
    
    if (is_dir($path) === false) { #Không tồn tại thư mục 2021 trong uploads
        mkdir($path, 0777); #
    }

    $path = $path . '/' . $month;
    if (is_dir($path) === false) { #Không tồn tại thư mục 04 trong uploads/2021
        mkdir($path, 0777); #
    }
    
    $path = $path . '/' . $day;
    if (is_dir($path) === false) { #Không tồn tại thư mục 04 trong uploads/2021/04
        mkdir($path, 0777); #
    }

    return $path;
}

function getFolder($path = 'uploads')
{
    /*
        Kiểm tra thư mục năm hiện tại, nếu không có thư mục => Tạo thư mục
        Kiểm tra thư mục tháng hiện tại (nằm bên trong thư mục Năm) => Tạo thư mục
        Kiểm tra thư mục ngày hiện tại (nằm trong Tháng) => Tạo thư mục
    */

    $info = [ date("Y"), date("m"), date("d") ];

    $pathFull = $path;
    foreach ($info as $key => $value) {
        $pathFull .=  '/' . $value;
        
        if (is_dir($pathFull) === false) {
            mkdir($pathFull, 0777);
        }
    }

    return $pathFull;
}


function writeLog($content = '')
{
    $fp = fopen("data.log", "a+");
    fwrite($fp, $content);
    fclose($fp);
}