<?php 
	$dsn='mysql:host=localhost; dbname=merchandise';
	$username='root';
	$password='';
	
	try
	{
		$db = new PDO($dsn, $username, $password);
	}
	catch(PDOExcepion $e)
	{
		$error_message=$e->getMessage();
		echo $error_message;
		exit();
	}
?>