<?php

namespace App\Controllers;

class HomeController
{
    private $homeModel;

    public function __construct(){
        $this->homeModel = new \App\Models\HomeModel;
    }

    public function index($data) {
        include('app/public/views/home.php');
    }
}