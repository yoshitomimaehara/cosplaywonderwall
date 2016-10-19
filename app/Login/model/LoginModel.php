<?php
require_once "../dao/LoginDao.php";
require_once "../domain/Login.php";
class LoginModel{
    function Validate($user,$pass){
        $dao = new LoginDao();
        if($dao->isValid($user,$pass)){
            $obj = new Login();
            $obj->setUsername($user);
            $obj->setPassword($pass);
        }else{
            throw new exception("Nombre de Usuario o Contraseña Incorrecta!!");
        }
    }
}
?>