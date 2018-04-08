<?php 

session_start();

if (isset($_SESSION['username']) == false) {
	// Unauthorised access
	header("Location: index.php");
}