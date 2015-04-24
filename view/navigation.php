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
			<a class="link" href="post.php">Create Post</a>
		</li>
	</ul>
</nav>	