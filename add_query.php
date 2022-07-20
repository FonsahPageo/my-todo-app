<<<<<<< HEAD
<?php
	require_once 'conn.php';
	if(ISSET($_POST['add'])){
		if($_POST['task'] != ""){
			$task = $_POST['task'];
			$activity = $_POST['activity'];
			$dateline = $_POST['dateline'];
			
			$conn->query("INSERT INTO `tasks` VALUES('', '$task', '$activity', '', '$dateline')");
			header('location:index.php');
		}
	}
=======
<?php
	require_once 'conn.php';
	if(ISSET($_POST['add'])){
		if($_POST['task'] != ""){
			$task = $_POST['task'];
			$activity = $_POST['activity'];
			$dateline = $_POST['dateline'];

			
			$conn->query("INSERT INTO `tasks` VALUES('', '$task', '$activity', '', '$dateline')");
			header('location:index.php');
		}
	}
>>>>>>> 2d15fc06d0e9b82f684741a37817d6802e0ba733
?>