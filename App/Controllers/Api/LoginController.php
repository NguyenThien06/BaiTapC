<?php

namespace App\Controllers\Api;

use Core\Controller;
use App\Helpers\Token;
use Core\Helper;
use App\Models\User;

class LoginController extends Controller
{
    protected $token;
    protected $model;

    public function __construct()
    {
        $this->token = new Token();
        $this->model = new User();
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = isset($_POST['email']) ? Helper::makeSafe($_POST['email']) : '';
            $password = isset($_POST['password']) ? Helper::makeSafe($_POST['password']) : '';
            
            if ($email == '' || $password == '') {
                return json([ 'error' => true, 'message' => 'Vui lòng nhập đầy đủ thông tin' ]);
            }

            $user = $this->model->get($email);
            if (is_null($user)) {
                return json([ 'error' => true, 'message' => 'Thông tin Email không chính xác' ]);
            }

            if (password_verify($password, $user['password'])) {
                #Tạo ra token
                $token = $this->token->create($user);
                return json([ 
                    'error' => false, 
                    'user' => $user,
                    'token' => $token 
                ]);
            }

            return json([ 'error' => true, 'message' => 'Mật khẩu không chính xác' ]);
        }

        return json([
            'error' => true,
            'message' => 'Phương thức không hổ trợ'
        ]);
    }
}