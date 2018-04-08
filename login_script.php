<?php 

if (isset($_POST['submit'])) {
	// Get the database connection 
	require_once 'dbcon_script.php';

	// Validate input
	// Prevent SQL injection
	// Prevent XSS
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Is any field empty?
	if (empty(trim($username)) || empty(trim($password))) {
		$empty = "Please, fill in all the inputs";
		include 'index.php';
		exit();
	}

	$sql = "SELECT * FROM users WHERE username='$username'";

	if ($result = mysqli_query($link, $sql)) {

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			$hashed_password = $row['password'];

			if (password_verify($password, $hashed_password)) {
				// Let the uset log in
				// Start the session
				session_start();

				$_SESSION['username'] = $username;
				header("Location: home.php");
			}
		}
		else {
			// Login Error
			header("Location: index.php?error");
		}
	}
}

else {
	// Invalid Access
	header("Location: index.php");
}