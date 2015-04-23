<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
if (mysqli->connect_erro) { //if there's an error with the connection, we want to kill it and display Connect Error.
	die('Connect Error (' . $mysqli->connect_errno . ')'
		. mysqli->connect_error);
}
else {	//if there is no connection erro, then echo:
	echo "Connection made";
}
$mysqli->close();
?>