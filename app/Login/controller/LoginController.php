<?php
require_once "../model/LoginModel.php";
    class LoginController{
        function getValidation(){
            $model = new LoginModel();
            $model->validate();
        }
    }
?>