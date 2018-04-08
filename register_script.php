<?php 

	if(isset($_POST['submit'])) {

		// Get the database connection 
		require_once 'dbcon_script.php';

		// Validate input
		// Prevent SQL injection
		// Prevent XSS
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['conf-password'];

		
		// Is any field empty?
		if (empty(trim($username)) || empty(trim($password)) || empty(trim($confirm_password))) {
			$empty = "Please, fill in all the inputs";
			include 'user_register.php';
			exit();
		}


		// Has the username already been taken?
		$sql = "SELECT * FROM users WHERE username='$username'";
		$result = mysqli_query($link, $sql);

		if (mysqli_num_rows($result) > 0) {
			$name_error = "Username already exist";
			$username = "";
			include 'user_register.php';
			exit();
		}

		// Are the passwords equal?
		if ($password !== $confirm_password) {
			$pwd_error = "The passwords didn't match";
			$password = $confirm_password = "";
			include 'user_register.php';
			exit();
		}

	
		// Creates a password hash
		$password = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO users(username, password, created_at) VALUES('$username', '$password', NOW())";

		if (mysqli_query($link, $sql)) {
			header('Location: index.php?new_user');
		}
		else {
			$db_error = "Couldn't register the user.";
			include 'user_register.php';
		}
	}