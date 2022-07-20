<?php

require 'conn.php';
$sql = "SELECT Name, Activity, Dateline FROM tasks WHERE State = 'Done'";
if ($result = mysqli_query($conn, $sql)) {
	$rowcount = mysqli_num_rows($result);
}

$sql1 = "SELECT * FROM tasks";
if ($result1 = mysqli_query($conn, $sql1)) {
	$rowcount1 = mysqli_num_rows($result1);
}


$productivity_score = ($rowcount / $rowcount1) ;

// echo "Number of Done tasks is ", $rowcount."<br>";

// echo "Total number of tasks is ", $rowcount1."<br>";

echo "Productivity Score is ", $productivity_score;


?>