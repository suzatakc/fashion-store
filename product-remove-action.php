<?php
include('dbconnection.php');
session_start();

if (!isset($_SESSION['name'])) {
    header("Location:index.php");
}
$product_id = $_GET['product_id'];

$sql = "select  * from products where id='" . $product_id . "' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
    $_SESSION['product'] = $product;
} else {
    $_SESSION["product_not_found"] = true;
}

header("Location:product-remove.php");
$conn->close();
