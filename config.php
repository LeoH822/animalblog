<?php

const DB_HOST     = 'localhost';
const DB_NAME     = 'animalBlog';
const DB_LOGIN    = 'root';
const DB_PASSWORD = ''; 



function __autoload($class_name){
		if(file_exists('./includes/classes/'.$class_name.'.php')) {
		require_once './includes/classes/'.$class_name.'.php';
		}

		if(file_exists('./includes/controllers/'.$class_name.'.php')) {
		require_once './includes/controllers/'.$class_name.'.php';
		}

	} 


 ?>