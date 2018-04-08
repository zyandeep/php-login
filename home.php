<?php 
	require_once 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome | Home</title>
</head>
<body>
	
	<h1>Welcome user, <?php echo $_SESSION['username']; ?></h1>

	<h3>How are you doing today? </h3>

	<br>
	<br>

	<a href="logout_script.php">
		<button>Log out</button>	
	</a>

</body>
</html>