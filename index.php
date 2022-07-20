
<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<script>
			$(document).ready(function(){
			  $("btn1").click(function(){
			    $("p1").slideToggle();
			  });
			});
		</script>
	</head>
<body>
	<div class="container page">
		
	<!-- <div class="col-xl-3 mt-5"></div> -->
		<div class="col-xl-6 well">
			<h3 class="text-primary">PHP - Simple To Do List App</h3>
			<hr style="border-top:1px dotted #ccc;"/>
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<center>
					<form method="POST" class="form-inline" action="add_query.php">
						<input type="text" class="form-control" name="task" placeholder="Task Name" required/>
						<input type="text" class="form-control" name="activity" placeholder="Activity" required/>
						<input type="date" class="form-control" name="dateline" placeholder="Dateline" required/>
						<button class="btn btn-primary form-control" name="add">Add Task</button>
					</form>
				</center>
			</div>
			<br /><br /><br />
			<table class="table table-bordered table-responsive table-striped table-light">
				<thead class="table-dark">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Activity</th>
						<th>State</th>
						<th>Action</th>
						<th>Dateline</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$query = $conn->query("SELECT * FROM `tasks` ORDER BY `id` ASC");
						$count = 1;
						while($fetch = $query->fetch_array()){
					?>
					<tr>
						<td><?php echo $count++?></td>
						<td><?php echo $fetch['Name']?></td>
						<td><?php echo $fetch['Activity']?></td>
						<td><?php echo $fetch['State']?></td>
						<td class="actions" colspan="2">
						
								<?php
									if($fetch['State'] != "Done"){
										echo 
										'<a href="update_task.php?id='.$fetch['id'].'" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a>';
									}
								?>
								 <a href="delete_query.php?id=<?php echo $fetch['id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
							
						</td>
						<td><?php echo $fetch['Dateline']?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>

		<div class="action-btns d-flex">
			<a href="done_tasks.php?" class="btn btn-info">Completed tasks</a>

			<a href="productivity_score.php?" class="btn btn-warning">Productivity Score</a>
		</div>
	</div>
	
	
	</body>

</html>