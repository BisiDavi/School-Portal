<?php
	//////////Establishing Database connection
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sql";
	
	$connection = mysqli_connect($server, $username, $password, $dbname);
	
	if(!$connection){
		die("Awaiting Resources");
	}
?>