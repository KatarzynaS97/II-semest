<?php

// wybiera sposób połączenia 

require "connectConfig.php";
if($db_server_type=="MYSQLI"){
	include ("connectDB.php");
}



?>