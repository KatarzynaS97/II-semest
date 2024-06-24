<?php

			//połaczenie z zadekralowaną bazą 
	require "connectConfig.php";
	//funkcja do polaczenie z bazą 
	
	$cnn = '(db_host,$db_server_name ,$db_server_passwd ,$db_name,$db_user)';
	function db_query($_qry){
		require "connectConfig.php";
		global $cnn;
		$result = mysqli_connect($cnn, $_qry);
		
		return ($result);
	}

?>