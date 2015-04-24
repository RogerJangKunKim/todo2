<?php

	require_once(__DIR__ . "/../model/config.php");
?>
<div id="login">
	<h1 class="whitefont">Login</h1>

	<form method="post" action="<?php echo $path . "controller/login-user.php"?>">

		<div>
			<label class="whitefont" for="username">Username: </label>
			<input type="text" name="username" placeholder ="Username"/>
		</div>

		<div>
			<label class="whitefont" for="password">Password: </label>
			<!-- input type is password because we don't want the user to see what they are typing, so it will appear as bullet points -->
			<input type="password" name="password" placeholder="Password"/>
		</div>

		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</div>