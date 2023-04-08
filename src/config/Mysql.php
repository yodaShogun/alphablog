<?php
    namespace src\config;
    
    use PDO;

    class Mysql{

        private static $host = 'localhost';
        private static $user = 'root';
        private static $data = 'academyblog';
        private static $pass= ''; 

        protected $linkage = null;

        function __construct(){
            try{
                $this->linkage =  new PDO("mysql:host=".self::$host.";dbname=".self::$data,self::$user,self::$pass);
                $this->linkage->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(\PDOException $er){
                die("I got an error of typeof: ".$er->getMessage());
            }
        }

        function fetch(){return $this->linkage;}
    }