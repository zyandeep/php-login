<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>User Registration</title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
 <body>
 	<h2>New User Registration</h2>
 	<p>Please fill this form to create an account</p>
 	<hr>
	<br>
	<p>
		<strong>
			<?php
				echo empty($empty) ? "" : $empty; 
				echo isset($name_error) ? $name_error : "";
				echo isset($pwd_error) ? $pwd_error : "";
				echo isset($db_error) ? $db_error : "";
			?>
		</strong>	
	</p>
	<br>
	

 	<form method="POST" action="register_script.php">
 		<fieldset>
 			<legend>User Information</legend>
 			<p>
 				<label>Username: </label>
 				<input type="text" name="username" required="required" value="<?php echo isset($username) ? $username : "";?>">
 				<span id="username-error"></span>
 			</p>
 			<p>
 				<label>Password: </label>
 				<input type="password" name="password" required="required" value="<?php echo isset($password) ? $password : ""; ?>">
 			</p>
 			<p>
 				<label>Confirm Password: </label>
 				<input type="password" name="conf-password" required="required" value="<?php echo isset($confirm_password) ? $confirm_password : ""; ?>">
 			</p>
 			<p>
 				<input type="submit" name="submit" value="Submit">
 				<input type="reset" value="Reset">
 			</p>
 		</fieldset>	
 	</form>
	<br>
	<br>
	<p>
		Already have an account? <a href="index.php">Login Here...</a>
	</p>

	
	<script src="js/ajax.js"></script>
 </body>
 </html>