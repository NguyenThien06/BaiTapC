<?php

define('URL_HOME', 'http://php-08-3/Buoi_7');

// define('DB', [
//     'servername' => 'localhost',
//     'username'  => 'root',
//     'password'  => '',
//     'database'  => 'php_08_03'
// ]);

define('DB', [
    'localhost',
    'root',
    '123',
    'php_08_03'
]);

$db = '123';

function test()
{
    global $db;
    return $db;
}

// echo test();


/*
    $a = 5;
    nếu $a bằng 5
        thì xuất oke
    ngược lại
        thì xuất lỗi
    
    nếu $a bằng 5 ? thì ok : ngược lại thì lỗi
*/

// $a = 1213;
// if ($a == 5) {
//     echo 'OKE';
// } else {
//     echo 'Lỗi';
// }

// echo $a == 5 ? 'OKE' : 'Sai';

// if ($a == NULL) {

// }

// if (is_null($a)) {
//     echo 'OKE';
// } else { 
//     echo $a;
// }

// echo $a ?? 'OKE';


$a = true;

// if ($a) { // Thằng a có phải là TRUE hay không
//     echo 'ĐÚNG';
// }

// ! => phủ định
// if ($a != true) { // Thằng a có phải là FALSE hay không
//     echo 'ĐÚNG';
// }

if ($a) {
    echo 'Mệnh đề đúng';
} else {
    echo 'Mệnh đề sai';
}

echo '<hr>';

$number = 1;
$string = "Nguyễn Văn B";
// if ($number == 1) {
//     echo 'Số 1';
// } else if ($number == 2) {
//     echo 'Số 2';
// } else if ($number === 3) {
//     echo $number + 5;
// } else {
//     echo 'Lỗi';
// }


// Nhận giá trị tuyệt đối để kiểm tra == 
// switch ($string) {
//     case "Nguyễn Văn A":
//         echo 'Số 1';
//     break;

//     case "Nguyễn Văn B":
//         echo 'Số 2';
//     break;

//     case "Nguyễn Văn C": 
//         echo 'Số 3';
//     break;

//     default :
//         echo 'LỖI';
// }


//FOR
// $arr = [
//     'Số 1', 'Số 2', 'Số 3', 'Số 4', 'Số 5', 'Số 6'
// ];

// $countArray = count($arr);

// for ($i = 0; $i < $countArray; $i++) {
//     echo $arr[$i] . "<br >";
// }

// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         echo 'Số ' . $i . ' Chia hết cho 2 <br />';
//     }
// }

// Foreach

// Ví du 100 000
// $arr = [
//     'Số 1', 'Số 2', 'Số 3', 'Số 4', 'Số 5', 'Số 6'
// ];

// $arr = [
//    [
//     'name' => 'Nguyễn Văn A',
//     'address' => '758 Phạm Văn Chiêu, Gò Vấp',
//     'phone'  => '(028) 123 123' 
//    ],
//    [
//     'name' => 'Nguyễn Văn A',
//     'address' => '758 Phạm Văn Chiêu, Gò Vấp',
//     'phone'  => '(028) 123 123' 
//    ],
//    [
//     'name' => 'Nguyễn Văn A',
//     'address' => '758 Phạm Văn Chiêu, Gò Vấp',
//     'phone'  => '(028) 123 123' 
//    ],
// ];

//sleep(5);
//Queue
//chunk
//redis

// foreach ($arr as $key => $value) {
//     echo $value['address'] . '<br />';
// }

$int = 10;

// while ($int <= 10) {
//     echo 'Số ' . $int;
    
//     $int++;
// }

// int = 1 => oke $int++;
/*  int = 2 => oke $int++;

.....
    int > 10 (int = 11) => thoát khỏi vòng lập
*/

// do {
//     echo $int;
//     $int++;
// } while ($int <= 9);

// $arr = [
//     'Số 1', 'Số 2', 
//     'Số 3', 'Số 4', 
//     'Số 5', 'Số 6', 
//     'Số 7' 
// ];

// $x = 0;
// foreach ($arr as $key => $value) {
//     echo $value . '<br />';

//     // 
//     $x++;
// }

// if ($x % 2 != 0) {
//     echo $arr[$x - 1] . ' Lỗi';
// }

for ($i = 1; $i <= 6; $i++) {

    echo $i . "&nbsp;";
}