<?php
	/**
	* Connection library
	* This file has the following configurations: Connecting to the MySql Databse
	**/
	$db_host = DB_HOST;
	$db_name = DB_NAME;
	$db_user = DB_USERNAME;
	$db_pasw = DB_PASSWORD;
	$dsn = "mysql:host=$db_host;dbname=$db_name";
	$pdo = new PDO($dsn, $db_user, $db_pasw);
?>