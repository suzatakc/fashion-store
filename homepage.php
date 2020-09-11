<?php
include('dbconnection.php');
session_start();

if (!isset($_SESSION['name'])) {
	header("Location:index.php");
}

function getProducts($conn)
{
	$sql = "select *  from products";
	return $conn->query($sql);
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
		<li><a href="logoutaction.php"> Logout</a></li>
	</ul>

	<h1>Welcome to homepage.<br><?php echo ($_SESSION['name']); ?></h1>

	<p>Your email is <?php echo ($_SESSION['email']); ?></p>


	<table>
		<th>id</th>
		<th>name</th>
		<th>price</th>
		<th>color</th>
		<th>quantity</th>

		<?php

		$result = getProducts($conn);

		if ($result->num_rows > 0) {

			while ($row =  $result->fetch_assoc()) {
				echo "<tr>";
		?>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['color']; ?></td>
				<td><?php echo $row['quantity']; ?></td>
		<?php
				echo "</tr>";
			}
		}
		?>
	</table>

</body>

</html>