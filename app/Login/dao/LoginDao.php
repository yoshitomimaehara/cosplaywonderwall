<?php
class LoginDao{
	function isValid($username,$password){
        $conection = AccesoDB::getConection();
        $sql = "select count(*) from login where username=? and pass=?";
        $preparedstatement = $conection->prepare($sql);
        $preparedstatement->setAttribute(1,$username);
        $preparedstatement->setAttribute(2,$password);
        $count = $preparedstatement->getAttribute(1);

        if($count == 0){
            return false;
        }else{
            return true;
        }
    }
}
?>