<?php require_once 'conn.php';
$conn = connect();
?>

<?php
	
	if($_GET['id'] != "") {
		$id = $_GET['id'];
			
		$conn->query("UPDATE `tasks` SET `State` = 'Done' WHERE `id` = $id") or die(mysqli_errno($conn));
		header('location: index.php');
	}
	
?>

// change button from anchor element into input
// check if button input exists, call function to add task(turn int fxn that takes conn and returns result)
// import done tasks file(create function) after importing conn