
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}

?>