
<?php

require_once 'conn.php';
$sql = "SELECT Name, Activity, Dateline FROM tasks WHERE State = 'Done'";
$result = $conn->query($sql);
   
if(!$result->num_rows > 0) {
	while($row =$result -> fetch_assoc()){
		echo $row["Name"].
		$row["Activity"]. $row["Dateline"]."<br>";
	}
}	
?>