<?php

namespace App\Models;

class UserModel
{
    public function register($name,$email,$password) {
        if($name == "" || $email == "" || $password == "") {
            return $this->alert('Fill all fields');
            die();
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->alert('Invalid email format');
        }else if($this->verifyEmail($email) == false) {
            $sql = \App\Database\Sql::connect()->prepare("INSERT INTO `tb_users` VALUES (null,?,?,?,?,?)");

            $user_token = sha1(uniqid(rand(),true));

            if($sql->execute(array($name,$email,sha1($password),$user_token,""))){
                header('Location: '.URL);
                die();
            };
        }else {
            $this->alert("this email already exists");
        }

    }

    public function login($email,$password)
    {
        if($email == "" || $password == "")
        {
            return $this->alert('Fill all fields');
            die();
        }else {
            $sql = \App\Database\Sql::connect()->prepare("SELECT * FROM `tb_users` WHERE email = ? AND password = ?");
            $sql->execute(array($email,sha1($password)));
            if($sql->rowCount() == 1) {
                $info = $sql->fetch();

                $_SESSION['logged'] = true;
                $_SESSION['nickname'] = $info['name'];
                $_SESSION['email'] = $info['email'];
                $_SESSION['password'] = $info['password'];
                $_SESSION['token'] = $info['token'];
                $_SESSION['img'] = $info['img'];

                header('Location: '.URL.'/home');
                die();
            }else{
                $this->alert('invalid fields');
            }
        }
    }

    public function loggout()
    {
        session_unset();
        session_destroy();
        header('Location: '.URL);
        die();
    }

    public function verifyEmail($email) {
        $sql = \App\Database\Sql::connect()->prepare("SELECT * FROM `tb_users` WHERE email = ?");
        $sql->execute(array($email));
        if($sql->rowCount() == 1) {
            return true;
        }else{
            return false;
        }
    }

    
    public function alert($msg) {
        echo "<script>alert('$msg')</script>";
    }

}