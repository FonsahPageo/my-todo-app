<?php require_once 'conn.php'; ?>
<?php
	
$sql;
$result;
$count;
$conn = connect();

function getDoneTasks($net) {
	$sql = "SELECT Name, Activity, Dateline FROM tasks WHERE State = 'Done' " ;

	if ($result = mysqli_query($net, $sql)) {
		$count = mysqli_num_rows($result);
	}

	return array($result, $count);
}

function getUnDoneTasks($net) {
	$sql = "SELECT Name, Activity, Dateline FROM tasks WHERE State = '' " ;

	if ($result = mysqli_query($net, $sql)) {
		$count = mysqli_num_rows($result);
	}

	return array($result, $count);
}

function getAllTasks($net) {

	$sql = "SELECT * FROM tasks";
	if ($result = mysqli_query($net, $sql)) {
		$count = mysqli_num_rows($result);
	}
	return array($result, $count);

}

function getOrderedTasks($net) {

	$sql = "SELECT * FROM `tasks` ORDER BY `id` ASC";
	if ($result = mysqli_query($net, $sql)) 

	return $result;

}


?>