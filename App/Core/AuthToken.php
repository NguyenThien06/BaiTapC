<?php

namespace App\Core;

use App\Helpers\Token;
use App\Models\User;
use Exception;

class AuthToken
{
    protected $user;

    public function __construct()
    {
        $token = $this->getToken();
        if (is_null($token)) {
            echo json([
                'error' => false,
                'message' => 'Token ERROR'
            ]);
            die();
        }

        #Khởi tạo class Token
        try{
            $appToken = new Token();
            $userInfo = $appToken->user($token);

        } catch (Exception $err) {
            echo json([
                'error' => false,
                'message' => 'Token ERROR'
            ]);
            die();
        }

        #Kiểm tra quyền (kích hoạt)
        $user = $this->checkUser($userInfo);
        if (is_null($user)) {
            echo json([
                'error' => false,
                'message' => 'Error User'
            ]);
            die();
        }

        $this->user = $user;
    }

    protected function getToken()
    {
        if (isset($_SERVER['HTTP_TOKEN']) && !empty($_SERVER['HTTP_TOKEN'])) {
            return $_SERVER['HTTP_TOKEN'];
        }

        return null;
    }

    protected function checkUser($userInfo = [])
    {
        if (empty($userInfo)) {
            return NULL;
        }

        $userInfo = json_decode(json_encode($userInfo), true);

        $userModel = new User();
        return $userModel->get($userInfo['email']);
    }
}