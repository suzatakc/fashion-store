<?php
// Start the session
session_start();

if (isset($_SESSION['name'])){
	header("Location:homepage.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/suju_labs/fashion_store/css/styles.css">
	<title>Login | Sujata Fashion Store</title>
</head>
<body>

<ul>
	<li><a href = "register.php">Register</a></li>
</ul>

<div class="container">
	
	<div class="form-container">
		<?php 

if(isset($_SESSION['login_error'])){
		
	echo("<p class='error'>".$_SESSION['login_error']."</p>");
	unset($_SESSION['login_error']);
	}
	

	?>

		<h4>Please Login to continue!!</h4>
		<form method="POST" action="loginaction.php">
			
				<label>
					username
				</label>
				<input type="text" name="name">

				<label>
					Password
				</label>
				<input type="Password" name="password">
				<button type="submit" class="btn-submit">Login</button>
		</form>


	</div>


</div>

</body>
</html>