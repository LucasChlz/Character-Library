<?php

namespace App\Controllers;

class CharacterController
{
    private $characterView;
    private $characterModel;

    public function __construct()
    {
        $this->characterView = 'app/public/views/libraryPainel/character';
        $this->characterModel = new \App\Models\CharacterModel;
    } 

    public function index($data)
    {   
        if(!isset($_SESSION['logged'])) {
            header('Location: '.URL);
            die();
        }
        $characters = $this->characterModel->listChar()->fetchAll();
        include($this->characterView.'/character-view.php');
    }

    public function create($data)
    {
        if(!isset($_SESSION['logged'])) {
          header('Location: '.URL);
          die();
        }else{
            if(isset($_POST['create']))
            {
                $img = $_FILES['img'];
                $this->characterModel->create($data,$img);
            }
            include($this->characterView.'/character-create.php');
        }
    }

    public function view($data)
    {
        if(!isset($_SESSION['logged'])) {
            header('Location: '.URL);
            die();
        }else{
            include($this->characterView.'/character-single.php');
        }
    }

}