<?php
include('dbconnection.php');
session_start();

if (!isset($_SESSION['name'])) {
    header("Location:index.php");
}

if (isset($_SESSION['product'])) {
    $product = $_SESSION['product'];
    unset($_SESSION['product']);
} else {
    header("Location:homepage.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    <link rel="stylesheet" href="/fashion-store/css/styles.css">
</head>

<body>
    <div class="product">

        <form action="product-update.php" method="post" class="product-form">
            <label for="id">Id:</label>
            <input type="text" name="id" id="id" value="<?php echo ($product['id']) ?>"><br><br>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required value="<?php echo ($product['name']) ?>"><br><br>
            <label for="color">Color:</label>
            <input type="text" name="color" id="color" required value="<?php echo ($product['color']) ?>"><br><br>
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity" required value="<?php echo ($product['quantity']) ?>"><br><br>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" required value="<?php echo ($product['price']) ?>"><br><br>
            <button type="submit" class="btn-product">Submit</button>
            <button type="reset" class="btn-product">reset form</button>
        </form>
    </div>
</body>

</html>