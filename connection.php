<?php

    class Connection{
        public static $server= "localhost";
        public static $username= "root";
        public static $passwd= "";
        public static $db= "php_abar_test";


        public static function connect(){
            $conn= new mysqli(self::$server,self::$username,self::$passwd,self::$db);
            return $conn;
        }
    }

?>
