<?php
class Login{
    function __construct(){
        $this->username = "";
        $this->password = "";
    }
    
    function setUsername($username){
        $this->username = $username;
    }
    
    function getUsername(){
        return $this->username;
    }
    
    function setPassword($password){
        $this->password = $password;
    }

    function getPassword(){
        return $this->password;
    }
}
?>