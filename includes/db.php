<?php

if ($_SERVER['SERVER_NAME']=="localhost") {

	$host 	= 'localhost';
	$user 	= 'user';
	$pass 	= 'password';
	$base 	= 'database_name';

	$pdo = new PDO("mysql:host=$host;dbname=$base",$user,$pass);
	$pdo->query("SET NAMES 'utf8'");
	$pdo->query('SET character_set_connection=utf8');
	$pdo->query('SET character_set_client=utf8');
	$pdo->query('SET character_set_results=utf8');


} else {

	$host 	= 'mysql.remotepath.com.br';
	$user 	= 'user';
	$pass 	= 'password';
	$base	= 'database_name';

	$pdo = new PDO("mysql:host=$host;dbname=$base",$user,$pass);
	$pdo->query("SET NAMES 'utf8'");
	$pdo->query('SET character_set_connection=utf8');
	$pdo->query('SET character_set_client=utf8');
	$pdo->query('SET character_set_results=utf8');

}
?> 

