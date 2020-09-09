<?php
include("dbconnection.php");
session_start();


$name = $_POST['name'];
$password = $_POST['Password'];
$email = $_POST['Email'];
$sql = "insert into users(name,password,email)  values ('".$name."' ,'".$password."','".$email."')";

$result = $conn->query($sql);


if ($_SESSION['name'] = $name  && $_SESSION['password'] = $password){

	// $result = $result-> fetch_assoc();

	$_SESSION['name'] = $result['name'];
	$_SESSION['Password'] = $result['Password'];
	$_SESSION['Email'] = $result['Email'];
	 header("Location: index.php");
}
else{

	$_SESSION["login_error"] = " Wrong input !!<br>  Please Try Again !!! ";
	header("Location:register.php");
}

$conn->close();
?>