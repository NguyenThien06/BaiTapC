<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php_08_03';

$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset('utf8');