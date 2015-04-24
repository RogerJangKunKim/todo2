<?php 
	// we now have access to the path variable. correct path to reach certain files/folders without difficulty.
	require_once(__DIR__ . "/../model/config.php");

	$date = new DateTime('today');
?>
<div id="register">
	<!-- allow users to register -->
	<h1 class="whitefont">Register</h1>
	<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	
		<div class="whitefont">
			<label for="email">Email: </label>
			<input type="text" name="email" />
		</div>

		<div class="whitefont">
			<label for="username">Username: </label>
			<input type="text" name="username" />
		</div>

		<div class="whitefont">
			<label for="password">Password: </label>
			<!-- input type is password because we don't want the user to see what they are typing, so it will appear as bullet points -->
			<input type="password" name="password" />
		</div>

		<div>
			<button type="submit">Submit</button>
		</div>
	
	</form>
</div>