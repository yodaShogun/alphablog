<?php
    namespace src\config; 

    use src\config\Mysql;
    
    use PDO;

    class Instance{

        private static $dbValue = null;

        private function __construct(){}

        public static function getData()
        {
            if (static::$dbValue == null) {
                static::$dbValue = new Mysql();
            }
            return  static::$dbValue->fetch();
        }
    }