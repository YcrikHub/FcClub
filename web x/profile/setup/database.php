<?php
	if(basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)) die('{"errors":[{"code":401,"message":"Unauthorized"}]}');
	
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'lsaj');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD','');
	define('ERROR_MESSAGE', 'Failed to connect to database!');

	try{
		$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=gbk', DB_USERNAME, DB_PASSWORD);

	}catch( PDOException $Exception ) {

		error_log('ERROR: '.$Exception->getMessage().' - '.$_SERVER['REQUEST_URI'].' at '.date('l jS \of F, Y, h:i:s A')."\n", 3, 'error.log');
		die(ERROR_MESSAGE);
	}
?>