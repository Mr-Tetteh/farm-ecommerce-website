<?php
class Sessions{

    private $signed_in = false;
    public $id = "";
    public $email;
    public $username = "";



    function __construct(){
        session_start();
        $this->check_the_login();

    }

    public function is_signed_in(){
        return isset($_SESSION['id']);
    }

    public function login ($user){
        if ($user){
            $this->id = $_SESSION['id'] = $user->id;
            $this->username = $_SESSION['usernae'] = $user->username;

            $this->signed_in = true;
        }
    }



    public function logout(){
        unset($_SESSION['id']);
        unset($this->id);
        $this->signed_in = false;
    }

    public function check_the_login(){
        if(isset($_SESSION['id'])){
            $this->id = $_SESSION['id'];
            $this->signed_in = true;
        }else{
            unset($this->id);
            $this->signed_in = false;
        }
    }

}

$session = new Sessions();
