<?php

namespace App\Helpers;

use Firebase\JWT\JWT;

class Token
{
    protected $key = '12@33456789asdffghjklkjgdjhahdjadasjdbv';

    #Tạo token
    public function create($payload = [])
    {
        $payload = array_merge($payload, [
            'exp' => time() + 3600,
            "iss" => "http://example.org",
            "aud" => "http://example.com",
        ]);
        
        return JWT::encode($payload, $this->key);
    }

    #Lấy thông tin user
    public function user($jwt = '')
    {
        return JWT::decode($jwt, $this->key, array('HS256'));
    }
}