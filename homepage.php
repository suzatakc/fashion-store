<?php 
include('dbconnection.php');
	session_start();

	if(!isset($_SESSION['name'])){
		header("Location:index.php");
	}

	function getProducts($conn){
		$sql = "select *  from products";
		$result = $conn->query($sql);
		return ($result-> fetch_assoc());
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage | Sujata fashion store</title>
</head>
<body>
	<ul>
		<li>Homepage</li>
		<li><a href= "logoutaction.php"> Logout</a></li>
	</ul>

	<h1>Welcome to homepage.<br><?php  echo ($_SESSION['name']);?></h1>

	<p>Your email is <?php echo ($_SESSION['email']);?></p>
	

	<table>
		<th>id</th>
		<th>name</th>
		<th>price</th>
		<th>color</th>
		<th>quantity</th>

<?php

getProducts();
	
if($result->num_rows >0) 
{	
while ($row =  $result -> fetch_assoc()) 
{
	echo "<tr>";
	$id=$row[0];
	$name=$row[1];
	$password=$row[2];
	$color=$row[3];
	$price=$row[4];

	echo "<td>".$id."</td>";
	echo "<td>".$name."</td>";
	echo "<td>" .$password."</td>";
	echo "<td>".$color."</td>";
	echo "<td>".$price."</td>";
}
}
// 	printf("<td>".$row['id']."</td>");
// 	printf("<td>".$row['name']."</td>");
// 	printf( "<td>".$row['price']."</td>");
// 	printf( "<td>".$row['color']."</td>");
// 	printf("<td>".$row['quantity']."</td>");
// }
	
	echo "</tr>";

?>
	</table>

</body>
</html>













































































































































