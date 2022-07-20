<<<<<<< HEAD
<?php
	require_once 'conn.php';
	
	if($_GET['id']){
		$id = $_GET['id'];
		
		$conn->query("DELETE FROM `tasks` WHERE `id` = $id") or die(mysqli_errno());
		header("location: index.php");
	}	
=======
<?php
	require_once 'conn.php';
	
	if($_GET['id']){
		$id = $_GET['id'];
		
		$conn->query("DELETE FROM `tasks` WHERE `id` = $id") or die(mysqli_errno());
		header("location: index.php");
	}	
>>>>>>> 2d15fc06d0e9b82f684741a37817d6802e0ba733
?>