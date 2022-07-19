<?php

require_once 'conn.php';
if (isset($POST['done'])) {
	$query = "SELECT Name, Activity, Dateline FROM tasks WHERE State = 'Done";
	$data = mysql_query($mysqli, $query);

	if (!$data) {
		echo "Error description: " . mysqli_error($mysqli);
	} else {
		while ($row = mysqli_fetch_array($data)){
			echo $row['Name'];
			echo $row['Activity'];
			echo $row['Dateline'];
		}
	}
}

?>