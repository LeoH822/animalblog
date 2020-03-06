<?php
    class DB{
        private  static $instance;
        private  const DB_HOST = 'localhost';
        private  const DB_NAME = 'animsal_blog';
        private  const DB_LOG  = 'root';
        private  const DB_PASS = '';

        public static function connectToDB(){
            
            try{
                self::$instance = new PDO("mysql:" . self::DB_HOST . ";dsbname=" . self::DB_NAME,
                self::DB_LOG,
                self::DB_PASS,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);   
                return self::$instance;
            }
            
            catch(PDOException $e){
                die ("Error ---> $e");
            }
        }
    }

    $pdo = DB::connectToDB();
    print_r($pdo);
    
    
    
    
    
?>