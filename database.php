<?php
    class Database
    {
        /*private static $dbName = 'crud_php_star';
        private static $dbHost = 'localhost';
        private static $dbUsername = 'crud_php';
        private static $dbUserpassword = '123';*/

        private static $cont = null;

        public function __construct(){
            die('Init function is not allowed');
        }

        public static function connect()
        {
            //One connection through whole application
            if ( null == self::$cont)
            {
                try{
                self::$cont = new PDO( "mysql:host=localhost; dbname=crud_php_star", "crud_php", "123");
                }
                catch(PDOException $e)
                {
                    die($e->getMessage());
                }
            }
            return self::$cont;
        }
        public static function disconnect()
        {
            self::$cont = null;
        }
    }

?>