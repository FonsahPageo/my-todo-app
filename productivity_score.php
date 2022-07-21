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


list($doneTasks, $doneCount) = getDoneTasks($conn);
list($undoneTasks, $undoneCount) = getUnDoneTasks($conn);
list($allTasks, $tasksCount) = getAllTasks($conn);


$productivity_score = ($doneCount / $tasksCount) ;

// echo "Number of Done tasks is ", $rowcount."<br>";

// echo "Total number of tasks is ", $rowcount1."<br>";

// echo "Productivity Score is ", $productivity_score;


?>