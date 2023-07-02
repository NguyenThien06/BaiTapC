<?php
namespace App\Controllers;

use App\Models\UserModel;

class HomeController
{

    public function index()
    {
        $userModel = new UserModel;
        return $userModel->show();
    }
}   