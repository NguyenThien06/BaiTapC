<?php


// $data = [
//     [
//         'id' => 10,
//         'username' => 'Nguyễn Văn A'
//     ],

//     [
//         'id' => 11,
//         'username' => 'Nguyễn Văn B'
//     ],

//     [
//         'id' => 12,
//         'username' => 'Nguyễn Văn C'
//     ]
// ];

#Data mới
$data = [
    'id' => 10,
    'username' => 'Nguyễn Văn A',
    'address' => 'Quận 10'
];

#var_dump($_POST);

#JSON
header('Content-type: application/json');
echo json_encode($data);
