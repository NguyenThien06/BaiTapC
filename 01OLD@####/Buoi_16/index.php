<?php
/*
    1. Validate dữ liệu 
    2. CallBackFunction
    3. Json
    4. Exception 
*/

$html = 111;

$check = filter_var($html, FILTER_VALIDATE_INT);

#var_dump($check);

if (!filter_var($html, FILTER_VALIDATE_INT) === false) {
    //Lỗi
}

$ip = "127.0.0.1.32323";

#var_dump(filter_var($ip, FILTER_VALIDATE_IP));

#$email = "john.doe@example.com.vn";
#Cắt chuỗi
#$emailArray = explode("@", $email);
#$nameDomain = $email[1];

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
// if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
// }


/* variable to check */
$int = 1202;

/* min value */
$min = 1;
/* max value */
$max = 200;

// if (filter_var($int, FILTER_VALIDATE_INT, [
//         'options' => [
//             'min_range' => $min,
//             'max_range' => $max
//         ]
//     ]) === false) {

// }

$result = filter_var($int, FILTER_VALIDATE_INT, [
                'options' => [
                    'min_range' => $min,
                    'max_range' => $max
                ]
            ]);

// var_dump($result);

$url = "https://www.w3schools.com/?price=1&sort=1&key=iphone&ab=1&def";

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  	
    // echo '<pre>';
    // var_dump($_SERVER);
    // echo '<pre>';
    #price=1&sort=1&key=iphone&ab=1&def
    // $queryString = $_SERVER['QUERY_STRING'];
    // $input = [];

    // $array = explode('&', $queryString);

    // foreach ($array as $key => $value) {
    //     $arrayNew = explode('=', $value);

    //     $input[] = [
    //         $arrayNew[0] => $arrayNew[1]
    //     ];
    // }

    // echo '<pre>';
    // var_dump($input);
    // echo '</pre>';
}


// Callback Function

$data = [
    'id' => 1,
    'username' => 'admin',
    'password' => '123456',
    'avatar'   => 'https://mondaycareer.com/wp-content/uploads/2020/11/avatar-%C4%91%C3%B4i-l%C3%A3ng-m%E1%BA%A1n-768x992.jpg'
];

#Chuyển 1 data Array qua Json json_encode()

header('Content-type: application/json'); // Set header về json
$dataJson = json_encode($data);

echo $dataJson;

#Chuyển json => array => json_decode()

#$dataJsonArray = json_decode($dataJson); # Trả về object(stdClass)

// $dataJsonArray = json_decode($dataJson, true); # Trả về array
// echo '<pre>';
// var_dump($dataJsonArray);
// echo '</pre>';

#echo $dataJsonArray->username; // Lấy dữ liệu bằng object(stdClass)

/*

Bài Tập
Tính chu vi và diện tích hình chữ nhật, và hình vuông.
Xuất kết quả vừa tính
=> nhập dữ liệu gọi lên API => json
=> API nhận thông tin => xử lý trả về kết quả
=> fontend append kết quả
*/