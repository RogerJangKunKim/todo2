<?php
	$mysqli = new mysqli("localhost", "root", "root", "todo2");

	if($mysqli->connect_error){
		die("connect error(" . $mysqli->connect_errno . ")"
			. $mysqli->connect_error);
	}
	else{
		
	}
	
	$mysqli->close();

?>