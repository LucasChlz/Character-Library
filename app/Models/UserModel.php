<?php

namespace App\Models;

class UserModel
{
    public function register($name,$email,$password) {
        if($name == "" || $email == "" || $password == "") {
            return $this->alert('Filld all fields');
            die();
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->alert('Invalid email format');
        }else if($this->verifyEmail($email)) {
            $sql = \App\Database\Sql::connect()->prepare("INSERT INTO `tb_users` VALUES (null,?,?,?,?,?)");

            $user_token = sha1(uniqid());

            if($sql->execute(array($name,$email,sha1($password),$user_token,""))){
                header('Location: '.URL);
                die();
            };
        }

    }

    public function alert($msg) {
        echo "<script>alert('$msg')</script>";
    }

    public function verifyEmail($email) {
        $sql = \App\Database\Sql::connect()->prepare("SELECT * FROM `tb_users` WHERE email = ?");
        $sql->execute(array($email));
        if($sql->rowCount() == 1) {
            $this->alert("this email already exists");
            return false;
        }else{
            return true;
        }
    }

}