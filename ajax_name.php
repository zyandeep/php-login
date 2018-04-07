<?php

require 'dbcon.php';


if (isset($_GET['query'])) {

	$username = mysqli_real_escape_string($link, $_GET['query']);

	$sql = "SELECT * FROM users WHERE username='$username'";

	if ($result = mysqli_query($link, $sql)) {
		if (mysqli_num_rows($result) > 0) {
			echo "<strong>";
			echo "Username already exist";
			echo "</strong>";
		}
	}
}