<?php

namespace App\Controllers;

class HomeController
{
    private $homeModel;
    private $userModel;

    public function __construct(){
        $this->homeModel = new \App\Models\HomeModel;
        $this->userModel = new \App\Models\UserModel;
    }

    public function index($data) {
        include('app/public/views/home.php');
    }

    public function register($data) {
        if(isset($_POST['register']))
        {
            $this->userModel->register($data['name'],$data['email'],$data['password']);
        }
        include('app/public/views/register.php');
    }
}