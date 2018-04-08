<?php

if (isset($_GET['query'])) {

	// Data Validation
	// SQL Injection Prevention
	//XSS Prevention

	require_once 'dbcon_script.php';
	
	$username = $_GET['query'];

	$sql = "SELECT * FROM users WHERE username='$username'";

	if ($result = mysqli_query($link, $sql)) {
		if (mysqli_num_rows($result) > 0) {
			echo "<strong>";
			echo "Username already exist";
			echo "</strong>";
		}
	}
}