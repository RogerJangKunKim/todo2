<?php
	require_once(__DIR__ . "/../model/config.php");


	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	// used to encrypt the password so people won't be able to identify the password.
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	// telling it to use $password and $salt use together to make an encrypted password, will give a unique encrypted password.

	$hashedPassword = crypt($password, $salt);

	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");
	// will echo if created user.
	if($query){
		echo "Successfully created user: $username";
		echo "<li><a href=" . "$path" . "login.php" . ">Login</li>";
	}
	// will echo if not successful
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
		echo "<li><a href=" . "$path" . "view/register-form.php" . ">Try Again</li>";
	}

?>
