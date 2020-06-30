<?php

namespace App\Controllers;

class CharacterController
{
    private $characterView;

    public function __construct()
    {
        $this->characterView = 'app/public/views/libraryPainel/character';
    } 

    public function index($data)
    {   
        if(!isset($_SESSION['logged'])) {
            header('Location: '.URL);
            die();
        }
        include($this->characterView.'/character-view.php');
    }

    public function create($data)
    {
        if(!isset($_SESSION['logged'])) {
          header('Location: '.URL);
          die();
        }
        include($this->characterView.'/character-create.php');
    }
}