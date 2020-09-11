<?php
include('dbconnection.php');
session_start();

if (!isset($_SESSION['name'])) {
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Products</title>
</head>

<body>
    <form action="product-register-action.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="color">Color</label>
        <input type="text" name="color" id="color" required>
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" required>
        <label for="price">Price</label>
        <input type="text" name="price" id="price" required>
        <button type="submit">Submit</button>
        <button type="reset">reset form</button>
    </form>
</body>

</html>