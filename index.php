<?php
	require_once('Routes.php');

	function __autoload($class_name){
		require_once './includes/classes/'.$class_name.'.php';
	}
 ?>