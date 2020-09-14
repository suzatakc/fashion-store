<?php
include('dbconnection.php');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="/fashion-store/css/styles.css">
	<title>Register form |Sujata Fashion Store</title>

</head>

<body>
	<div class="reg">
		<div class="form-reg">


			<form action="regaction.php" method="POST">
				<label>Username:</label>
				<input type="text" name="name" required>
				<label>Password:</label>
				<input type="password" name="Password" required>
				<br><br>
				<label>Email:</label>
				<input type="text" name="Email" required><br><br>

				<button type="submit" class="btn-reg">Register</button>

			</form>
		</div>

	</div>
</body>

</html>