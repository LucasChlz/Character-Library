<?php

namespace App\Controllers;

class HomeController
{
    private $homeModel;
    private $userModel;
    private $view;

    public function __construct(){
        $this->homeModel = new \App\Models\HomeModel;
        $this->userModel = new \App\Models\UserModel;
        $this->view = 'app/public/views';
    }

    public function index($data) {
        include($this->view.'/home.php');
    }

    public function register($data) {
        if(isset($_POST['register']))
        {
            $this->userModel->register($data['name'],$data['email'],$data['password']);
        }

        include($this->view.'/register.php');
    }

    public function login($data) {
        if(isset($_POST['login']))
        {
            $this->userModel->login($data['email'],$data['password']);
        }

        include($this->view.'/login.php');
    }
}