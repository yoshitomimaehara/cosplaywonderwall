<?php
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
                self::$pdo = new PDO($url, $user, $pass);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                self::$pdo->setAttribute(PDO::ATTR_CASE, PDO::ATTR_CASE_LOWER);
                self::$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
            }catch (PDOException $e){
                self::$pdo = null;
                throw $e;
            }
        }

        return self::$pdo;
    }
}
?>