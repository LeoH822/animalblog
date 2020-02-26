 <?php

 	class Database{

 		public static $host = "localhost";
 		public static $dbname = "AnimalBlogDB";
 		public static $user = "root";
 		public static $password = " ";
 	

 		public static function connect(){
 			$pdo = new PDO(self::$host,self::$dbname,$user,$password);

 			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


 			return $pdo;
 		}



 	} 


  ?>