<?php
include('dbconnection.php');
session_start();

if (!isset($_SESSION['name'])) {
    header("Location:index.php");
}



$name = $_POST['name'];
$color = $_POST['color'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "insert into products(name,price,color,quantity)  values
 ('" . $name . "' ,'" . $price . "','" . $color . "','" . $quantity . "')";

$result = $conn->query($sql);

if (!$result) {
    $_SESSION['product-error'] = true;
}
header("Location: homepage.php");
