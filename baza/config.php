<?php

	$dbServername = 'localhost' ;
	$user = 'admin';
	$password ='';
	$dbName = 'test001'; //nazwa bazy 

	//string do połaczenia 
	$conn = new mysqli($dbServername, $user, $password, $dbName);
	
	if($conn -> connect_error)
	{
		die("połaczenie nieudane: ". $conn->connect_error);
	}


?>