<!DOCTYPE html>
<html>
	<head>
		<meta>
		<title>Jang's To-Do List</title>
		<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
<body>
	<div id="header" class="background">
		<div class="link">
			<a href="login.php">Login</a>
		</div>
		<div class="link">
			<a href="register.php">Register</a>
		</div>
		<div class="link">
			<a href="index.php">Home</a>
		</div>
	</div>
	<div class="wrap">
		<div class="task-list">
			<ul>
				<?php require("/../includes/connect.php"); 
				$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
				$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
				if($result = $mysqli->query($query)){
					$numrows = $result->num_rows;
					if ($numrows>0) {
						while ($row = $result->fetch_assoc()) {
							$task_id = $row['id'];
							$task_name = $row['task'];

							echo '<li>
							<span>'.$task_name. '</span>
							<img id="'  .$task_id. '" class = "delete-button" width = "10px" src = "images/close.svg"/>
							</li>';
						}
					}
				}
				?>
			</ul>
		</div>
		<form class="add-new-task" autocomplete="off">
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</form>
	</div>
