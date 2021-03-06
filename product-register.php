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
    <link rel="stylesheet" href="/fashion-store/css/styles.css">

</head>

<body>
    <div class="product">

        <form action="product-register-action.php" method="post" class="product-form">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required> <br><br>
            <label for="color">Color:</label>
            <input type="text" name="color" id="color" required><br><br>
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity" required><br><br>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" required><br><br>
            <button type="submit" class="btn-product">Submit</button>
            <button type="reset" class="btn-product">Reset Form</button>
        </form>
    </div>
</body>

</html>