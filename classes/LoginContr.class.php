<?php

//CONTROLS THE DATA INPUT

class LoginContr extends Login{
    private $uid;
    private $pwd;
    // private $pwdRepeat;
    // private $email;

    public function __construct($uid, $pwd){
        $this->uid = $uid;
        $this->pwd = $pwd;
        // $this->pwdRepeat = $pwdRepeat;
        // $this->email = $email;
    }

    public function loginUser(){

        if ($this->emptyInput() == false){
            //echo empty input
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uid, $this->pwd);
    }

    private function emptyInput(){
        $result;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}