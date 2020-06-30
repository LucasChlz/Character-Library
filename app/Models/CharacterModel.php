<?php

namespace App\Models;

class CharacterModel extends GeneralModel
{
    public function create($info,$img)
    {
        if($info['name'] == "") {
            $this->alert("fill all fields");
        }else{
            $img = $this->uploadImages($img);
            $createDate = date('Y-m-d H:i:s');
            $create = \App\Database\Sql::connect()->prepare("INSERT INTO `tb_characters` VALUES (null, ?,?,?,?,?,?,?,?,?,?,?,?,?)");

            if($create->execute(array($_SESSION['token'],$info['name'],$info['age'],$info['gender'],$info['scenario'],$info['background'],$info['appearance'],$info['annotations'],$info['items'],$info['defects'],$info['benefits'],$img,$createDate))){
                $this->alert("character successfully created");
            }
        }
    }
}