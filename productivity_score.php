<?php
require 'conn.php';
$done_count;
$tasksCount;
$tasks;
$done_tasks;
$productivity_score;

function getDoneTasks() {
	$sql = "SELECT Name, Activity, Dateline FROM tasks WHERE State = 'Done' ";
	if ($done_tasks = mysqli_query($conn, $sql)) {
		$done_count = mysqli_num_rows($done_tasks);
	}
	return $done_count;
}

$sql = "SELECT Name, Activity, Dateline FROM tasks WHERE State = 'Done' ";
if ($done_tasks = mysqli_query($conn, $sql)) {
	$done_count = mysqli_num_rows($done_tasks);
}

$sql1 = "SELECT * FROM tasks";
	if ($tasks = mysqli_query($conn, $sql1)) {
		$tasksCount = mysqli_num_rows($tasks);
	}

function getAllTasks()
{
	$sql1 = "SELECT * FROM tasks";
	if ($tasks = mysqli_query($conn, $sql1)) {
		$tasksCount = mysqli_num_rows($tasks);
	}
	return $tasksCount;
}


function getScore(){
	getDoneTasks();
	getAllTasks();
	$productivity_score = ($done_count / $tasksCount) ;
	return $productivity_score;
}

// getScore();
$productivity_score = ($done_count / $tasksCount) ;

// echo "Number of Done tasks is ", $rowcount."<br>";

// echo "Total number of tasks is ", $rowcount1."<br>";

echo "Productivity Score is ", $productivity_score."<br>";
// echo "$sql";

?>