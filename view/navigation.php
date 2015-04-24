<?php 
	//corrected path to post.php removed the error of object not found when clicking the href link.
	//only need contents in config in order to change an image.
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

?>

<nav class="post" id="BLOGPOST">
	<ul>
		<li> <!--$path is created in config. path can be accessed from the config.php file by the require_once at the top of this file 
		$path links all project files together for easier access.
		php code echos the $path and the string.
		--><?php
			if(authenticateUser()){

			}
			else{

			}

			?>
			<h1 class="whitefont">Welcome to This Blog</h1>
			<a class="link" href="controller/logout-user.php">Logout</a>
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
		</li>
	</ul>
</nav>	