<?php
include('dbconnection.php');
session_start();

if (!isset($_SESSION['name'])) {
    header("Location:index.php");
}

if (isset($_SESSION['product'])) {
    $product =$_SESSION['product'];
    unset($_SESSION['product']);
}else{
    header("Location:homepage.php");
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
        <input type="hidden" name="id" id="id" value="<?php echo($product['id'])?>">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required value="<?php echo($product['name'])?>">
        <label for="color">Color</label>
        <input type="text" name="color" id="color" required value="<?php echo($product['color'])?>" >
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" required value="<?php echo($product['quantity'])?>">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" required value="<?php echo($product['price'])?>">
        <button type="submit">Submit</button>
        <button type="reset">reset form</button>
    </form>
</body>

</html>