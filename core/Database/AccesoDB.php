<?php
namespace cosplaywonderwall\core\database;
class AccesoDB{
    private static $pdo = null;

    function getConection(){
        if(self::$pdo == null){
            try{
                $host = "localhost";
                $user = "root";
                $pass = "fumoffu";
                $bd = "cosplaywonderwall";
                $url = "mysql:dbname:" + $bd + "host=" + $host;
                AccesoDB::$pdo = new PDO($url, $user, $pass);
                AccesoDB::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                AccesoDB::$pdo->setAttribute(PDO::ATTR_CASE, PDO::ATTR_CASE_LOWER);
                AccesoDB::$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
            }catch (PDOException $e){
                AccesoDB::$pdo = null;
                throw $e;
            }
        }

        return AccesoDB::$pdo;
    }
}
?>