<?php
	require_once 'conn.php';
	$conn = connect();
	
	if($_GET['id']){
		$id = $_GET['id'];
		
		$conn->query("DELETE FROM `tasks` WHERE `id` = $id") or die(mysqli_errno($conn));
		header("location: index.php");
	}	
?>