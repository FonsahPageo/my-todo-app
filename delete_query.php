<?php
	require_once 'conn.php';
	
	if($_GET['id']){
		$id = $_GET['id'];
		
		$conn->query("DELETE FROM `tasks` WHERE `id` = $id") or die(mysqli_errno());
		header("location: index.php");
	}	
?>