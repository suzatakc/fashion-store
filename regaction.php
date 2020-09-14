<?php
include("dbconnection.php");
session_start();


$name = $_POST['name'];
$password = $_POST['Password'];
$email = $_POST['Email'];
$sql = "insert into users(name,Password,Email)  values 
('" . $name . "', '" . $password . "', '" . $email . "')";
$result = $conn->query($sql);

if ($_SESSION['name'] = $name && $_SESSION['password'] = $password) {
	$_SESSION['name'] = $result['name'];
	$_SESSION['password'] = $result['password'];
	header("Location: index.php");
} else {
	header("Location:register.php");
}
