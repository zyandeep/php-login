<?php 
	require 'dbcon.php';

	if(isset($_POST['submit'])) {

		// Validate input
		// Prevent SQL injection
		// Prevent XSS

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "INSERT INTO users(username, password, created_at) VALUES('$username', '$password', NOW())";

		if (mysqli_query($link, $sql)) {
			header('Location: index.php?new_user=true');
		}
		else {
			$err_msg = "Username already exist";
		}
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>User Registration</title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
 <body>
 	<h2>New User Registration</h2>
 	<hr>
 	<br>
 	
 	<?php 
 		if (isset($err_msg)) {
 			echo "<strong>$err_msg</strong>";
 		}
 	 ?>
	<br>
	<br>

 	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 		<fieldset>
 			<legend>User Information</legend>
 			<p>
 				<label>Username: </label>
 				<input type="text" name="username" required="required">
 				<span id="username-error"></span>
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




	<!-- For ajax request to verify unique username -->
	<script>

		$(document).ready(function() {
			$('[type="text"]').on('input', function() {
				var data = $(this).val();

				if ((data.trim()).length !== 0) {

					// make an ajax call
					$.ajax({
						url: "ajax_name.php",
						type: "GET",
						data: {
							query: data,
						},
						success: function(data) {
							if (data.length > 0) {
								$('span#username-error').html(data);
							}
							else {
								$('span#username-error').html("");	
							}
						},
						error: function() {
							alert("Ajax failed!");
						}
					});
				}
			});
		});
	
	</script>

 </body>
 </html>