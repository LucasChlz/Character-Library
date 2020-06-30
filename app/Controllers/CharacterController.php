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
        include($this->characterView.'/character-view.php');
    }
}