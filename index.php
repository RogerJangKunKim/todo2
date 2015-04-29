<?php
	require_once(__DIR__ . "/controller/login-verify.php");
	//separated for easier maintenance.
	//header can be styled with style sheets.
	if(!authenticateUser()){
	require_once(__DIR__ . "/view/header.php");
}
	if(authenticateUser())  {
		//links to navigation.php and will show a link to post.php
		//only will run if user has been authenticated.
		require_once(__DIR__ . "/view/navigation.php");
	}
	//include info from create-db.php
	require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/view/footer.php");
?>
