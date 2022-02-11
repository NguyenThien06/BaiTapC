<?php

function callAPI($method, $data, $headers, $url) 
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    switch ($method) {
        case "GET":
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            break;
        case "POST":
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            break;
        case "DELETE":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE"); 
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
    }
	
    $response = curl_exec($curl);
	return $response;
}	



$header = ['token: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEiLCJlbWFpbCI6ImFkbWluQGxvY2FsaG9zdCIsInBhc3N3b3JkIjoiJDJ5JDEwJFJcL3NBaUphV0N4T0djUWM5dkhMQXplNDF0ZDdmLlIzbkVCOXVuZnlzalwvTkxcL0FoTTVLdkx1IiwiYWRkcmVzcyI6bnVsbCwiaW5mbyI6bnVsbCwiaXNfZGVsZXRlIjpudWxsLCJ0b2tlbiI6ImV5SjBlWEFpT2lKS1YxUWlMQ0poYkdjaU9pSklVekkxTmlKOSIsImNyZWF0ZWRfYXQiOiIyMDIxLTA2LTE0IDE5OjU4OjMzIiwiZXhwIjoxNjIzNjc5Nzk5LCJpc3MiOiJodHRwOlwvXC9leGFtcGxlLm9yZyIsImF1ZCI6Imh0dHA6XC9cL2V4YW1wbGUuY29tIn0.0Dw5ZxO-CSlDuT1hIVNg74yzK-fifhnpPIZcfkPtFGg'];

$result = callAPI('GET', $data = [], $header, 'http://php-08-03.vtest/api/menu/list');

echo '<pre>';
var_dump(json_decode($result, true));
echo '</pre>';