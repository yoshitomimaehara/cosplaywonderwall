<?php
class Profile{
    function __constructor(){
        $this->nickname = "";
        $this->facebook = "";
        $this->twitter = "";
        $this->instagram = "";
        $this->ask = "";
    }
    
    function getNickname(){
        return $this->nickname;
    }
    
    function setNickname($nickname){
        $this->nickname = $nickname;
    }
    
    function getFacebook($facebook){
        return $this->facebook;
    }
    
    function setFacebook($facebook){
        $this->facebook = $facebook;
    }
    
    function setTwitter($twitter){
        $this->twitter = $twitter;
    }
    
    function getTwitter(){
        return $this->twitter;
    }
    
    function setInstagram($instagram){
        $this->instagram = $instagram;
    }
    
    function setAsk($ask){
        $this->ask = $ask;
    }
}
?>