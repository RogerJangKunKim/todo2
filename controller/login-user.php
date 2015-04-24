<?php
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input (INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input (INPUT_POST, "password", FILTER_SANITIZE_STRING);

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	//num_rows how many rows we will retrieve from database.
	if($query->num_rows == 1){
		$row = $query->fetch_array();
		// case sensitive.
		//checks if hashed password=new hashed password
		if($row["password"] === crypt($password, $row["salt"])){
			$_SESSION["authenticated"] = true;
			echo "<p>Login Successful</p>";
			echo "<li><a href=" . "$path" . "index.php" . ">Home</li>";
		}
		else{
			echo "<p>Invalid Username and Password</p>";
			echo "<li><a href=" . "$path" . "login.php" . ">Try Again</li>";
		}
	}
	else{
		echo "<p>Invalid Username and Password</p>";
		echo "<li><a href=" . "$path" . "login.php" . ">Try Again</li>";
	}
