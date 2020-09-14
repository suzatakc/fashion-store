<?php
include('dbconnection.php');
session_start();

if (!isset($_SESSION['name'])) {
    header("Location:index.php");
}

$id = $_POST['id'];
$sql = "delete from products where id='".$id."'";
$result = $conn->query($sql);


if($result==true){
    header("Location:homepage.php");
}
