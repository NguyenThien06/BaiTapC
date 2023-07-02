<?php

// Thực hiện một công việc nào đó => phải trả về kết quả return
// Tái sử dụng
// không được dùng echo

// function tinhLuong(int $a, int $b)
// {
//     #$kq = $a + $b;
//     #$kq = $a + $b;
//     #$kq = $a + $b;
//     #$kq = $a + $b;
//     #$kq = $a + $b;

//     return 'Kết Quả là: ' . $kq;
// }

// $a = 5;
// $b = 7;

#echo tinhLuong($a, $b);

// var_dump(function_exists('tinhLuong'));
// Kiểm tra function tinhLuong có tồn tại hay không
// if (!function_exists('tinhLuong')) {
//     function tinhLuong()
//     {
//         return 'OKe';
//     }
// }

// function tinhLuongGoc($soNgay, $luongMotNgay)
// {
//     return $soNgay * $luongMotNgay;
// }

// $luongGoc = tinhLuongGoc(26, 100);

// echo 'Lương 1 tháng của Bạn: ' . $luongGoc;

// echo '<hr/>';

// function luong10(&$luongGoc)
// {
//     $luongGoc = ($luongGoc * 10 / 100 ) + $luongGoc;
// }

// echo 'Lương 1 tháng của Bạn sau khi tăng: ' . luong10($luongGoc);
#luong10($luongGoc);

// echo 'Lương 1 tháng của Bạn sau khi tăng: ' . $luongGoc;

// echo '<hr/>';

// function tinhLuong(&$value)
// {
//     $value += 10;
// }

// echo '<hr/>';


// $abc = 5;

// tinhLuong($abc);

// echo $abc;

// tinhLuong($abc);

// echo $abc;

/*
$a + $b;
*/

// $array = [
//     "A", "B", "C", "D"
// ];

// #Thay thế value trong mảng
// $array[0] = "F";

// $array[4] = "F";

// $countArr = count($array);

// echo $countArr;

// echo '<hr/>';

#Cách duyệt mảng với key là mặt định 0 => 
// for ($i = 0; $i < $countArr; $i++) {
//     echo $array[$i] . "<br />";
// }

// $product = [
//     'id'        => 10, 
//     'name'      => 'Nước Hoa Nam',  
//     'thumb'     => '/uploads/2020/03/21/name.jpg', 
//     'active'    => 1
// ];

// $product1 = [
//     'id1'        => 10, 
//     'name1'      => 'Nước Hoa Nam',  
//     'thumb1'     => '/uploads/2020/03/21/name.jpg', 
//     'active1'    => 1
// ];

#Nối mảng
// $product =  array_merge($product, $product1);


// echo '<pre>';
// var_dump($product);
// echo '<pre>';

// foreach ($product as $key => $value) {
//     echo $key . ' -- ';
//     echo $value . "<br />";

//     // echo $product['id'];
// }



// $array = [
//     [
//         [
//             'id' => 11,
//             'name'  => '1-1'
//         ],
//         [
//             'id' => 12,
//             'name'  => '1-2'
//         ],
//         [
//             'id' => 13,
//             'name'  => '1-3'
//         ],
//         [
//             'id' => 14,
//             'name'  => '1-4'
//         ],
//         [
//             'id' => 15,
//             'name'  => '1-5'
//         ],
//         "Mảng 1"
//     ],

//     [
//         [
//             'id' => 21,
//             'name'  => '2-1'
//         ],
//         [
//             'id' => 22,
//             'name'  => '2-2'
//         ],
//         [
//             'id' => 23,
//             'name'  => '2-3'
//         ],
//         [
//             'id' => 24,
//             'name'  => '2-4'
//         ],
//         [
//             'id' => 25,
//             'name'  => '2-5'
//         ],
//         "Mảng 2"
//     ],

//     [
//         [
//             'id' => 31,
//             'name'  => '3-1'
//         ],
//         [
//             'id' => 32,
//             'name'  => '3-2'
//         ],
//         [
//             'id' => 33,
//             'name'  => '3-3'
//         ],
//         [
//             'id' => 34,
//             'name'  => '3-4'
//         ],
//         [
//             'id' => 35,
//             'name'  => '3-5'
//         ],
//         "Mảng 3"
//     ],
// ];


// foreach ($array as $key1 => $value1) {
//     // echo '<pre>';
//     // var_dump($value1);
//     // echo '<pre>';
//     // echo '<hr>';
//     foreach ($value1 as $key2 => $value2) {
//         foreach ($value2 as $key3 => $value3) {
//             echo $value3 . '<hr />';
//         }
//     }
// }

// echo '<hr>';

// for ($i = 0; $i <= 10; $i++) {
//     echo $i . '<br />';
// }

function so($a)
{
    $a++;

    if ($a > 10) {
        echo 'Số 10';
    } else {
        echo so($a);
    }
}

echo so(1);

/*
    a = 1
        Tăng biến a a++;
        Nếu a > 10 => xuất
        gọi lại so(2);
    a = 2
        Tăng biến a++
        Nếu 2 > 10 => xuất
        gọi lại so(3);
    a = 3
        Tăng biến a++
        Nếu 3 > 10 => xuất
        gọi lại so(4);

    a = 4
        Tăng biến a++
        Nếu 4 > 10 => xuất
        gọi lại so(5);

    a = 5
    
*/

// KỸ thuật đệ quy
// function showMenu($array = [])
// {
//     foreach ($array as $key => $value) {
//         if (is_array($value)) { #nếu phần tử là mảng
//             echo showMenu($value);
//         } else {
//             echo $value . '--';
//         }
//     }
// }

// showMenu($array);


// echo '<pre>';
// var_dump($array);
// echo '<pre>';
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p></p> 

    <p></p>
</body>
</html>  -->