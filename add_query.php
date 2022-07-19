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
?>