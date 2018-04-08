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
			if(!empty($_GET['new_user'])) {
				echo "<em>";
				echo "The user has been registered successfully";
				echo "</em>";
			}

			if(!empty($_GET['error'])) {
				echo "<strong>";
				echo "Invalid username and/or password";
				echo "</strong>";
			}

			echo empty($empty) ? "" : "<strong>$empty</strong>";
		?>	

	</p>
	<br>
	<br>

	<form method="POST" action="login_script.php">
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
		</fieldset>
	</form>
	<br>
	<p>
		<a href="user_register.php">New User? Register Here...</a>
	</p>
</body>
</html>