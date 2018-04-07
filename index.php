<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Login System</title>
</head>
<body>
	<h2>User Login Panel</h2>
	<hr>
	<p>	
		<?php
			if(isset($_GET['new_user'])) {
				echo "<em>The User has been registered successfully.<em>";
			}
		?>	

	</p>
	<br>
	<br>

	<form method="POST" action="">
		<fieldset>
			<legend>Log In</legend>
			<p>
				<label>Username: </label>
				<input type="text" name="username" required="required">
			</p>
			<p>
				<label>Password: </label>
				<input type="password" name="password" required="required">
			</p>
			<p>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" value="Reset">
			</p>
			<p>
				<?php 
					
				?>
			</p>
		</fieldset>
	</form>
	<br>
	<p>
		<a href="user_register.php">New User? Register Here...</a>
	</p>
</body>
</html>