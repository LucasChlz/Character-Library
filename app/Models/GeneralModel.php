<?php

namespace App\Models;

class GeneralModel
{
    private $uploadDir;
    private $uploadFile;

    public function __construct()
    {
        $this->uploadDir = PATH.'app/public/images/';
    }

    public function uploadImages($img) {
        $typeValidate = array('image/png','image/jpeg','image/jpg','image/gif');
        if(in_array($img['type'],$typeValidate)){
            if($img['size'] < 20000) {
                $imgType = explode('.',$img['name']);
                $imgName = uniqid().'.'.$imgType[1];
                $this->uploadFile = $this->uploadDir.$imgName;
                if(move_uploaded_file($_FILES['img']['tmp_name'],$this->uploadFile)) {
                    return $imgName;
                }
            }else{
                $this->alert("the image is very big");
            }
        }else {
            $this->alert("invalid file please select a png, jpeg, jpg or gif file");
        }
    }

        
    public function alert($msg) {
      echo "<script>alert('$msg')</script>";
    }
}