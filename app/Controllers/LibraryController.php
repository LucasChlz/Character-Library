<?php

namespace App\Controllers;

class LibraryController
{
    private $view;

    public function __construct()
    {
        $this->view = 'app/public/views/library';
    }

    public function index($data)
    {
        include($this->view.'/home.php');
    }
}