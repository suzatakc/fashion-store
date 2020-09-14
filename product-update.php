<?php
include('dbconnection.php');
session_start();

if (!isset($_SESSION['name'])) {
    header("Location:index.php");
}

$id = $_POST['id'];
$quantity = $_POST['quantity'];
$name=$_POST['name'];
$price=$_POST['price'];
$color=$_POST['color'];
$sql = "update products set quantity='".$quantity."', name='".$name."', price='".$price."', color='".$color."' where id='".$id."'";
$result = $conn->query($sql);

//comarison operator  : <= , ==, >=, !=
//assignment operator: =

//$result = true;
//=

//$result == true;
// ==


//[0]=1

if($result==true){
    header("Location:homepage.php");
}
 else {
    $_SESSION['product-finished']="NO STOCK!!<br> Please vist other items.";
    header("Location:homepage.php");
  }
