<?php

/*
$text = "Nguyễn Văn a'";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo test_input($text);
*/

$array = [
    [
      'url' => 'http://google.com',
      'title' => 'Google 1'
    ],

    [
      'url' => 'http://google.com',
      'title' => 'Google 2'
    ],
    [
      'url' => 'http://google.com',
      'title' => 'Google 3'
    ],
    [
      'url' => 'http://google.com',
      'title' => 'Google 4'
    ],
    [
      'url' => 'http://google.com',
      'title' => 'Google 5'
    ],
    [
      'url' => 'http://google.com',
      'title' => 'Google 6'
    ],
    [
      'url' => 'http://google.com',
      'title' => 'Google 7'
    ],
    [
      'url' => 'http://google.com',
      'title' => 'Google 8'
    ],
];

header('Content-type: application/json');
echo json_encode($array);