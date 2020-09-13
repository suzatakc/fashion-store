<?php
// Start the session
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

			<?php
			if (isset($_SESSION['login_error'])) {

				echo ("<p class='error'>" . $_SESSION['login_error'] . "</p>");
				unset($_SESSION['login_error']);
			}

			?>
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