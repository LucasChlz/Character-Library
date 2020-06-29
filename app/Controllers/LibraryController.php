<?php

namespace App\Controllers;

class LibraryController
{
    private $userModel;
    private $view;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel;
        $this->view = 'app/public/views/libraryPainel';
    }

    public function index($data)
    {
        if(!isset($_SESSION['logged']))
        {
            header('Location: '.URL.'/login');
        }
        include($this->view.'/libraryHome.php');
    }

    public function loggout($data)
    {   
        if(!isset($_SESSION['logged']))
        {
            header('Location: '.URL.'/login');
        }else{
            $this->userModel->loggout();
        }
    }
}