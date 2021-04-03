

<!DOCTYPE html>
<html>
<head>
	<title>Store</title>
	<style>
	table {
	border-collapse: collapse;
	width: 100%;
	color: #588c7e;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
	}
	th {
	background-color: #588c7e;
	color: white;
	}
	tr:nth-child(even) {background-color: #f2f2f2}
	</style>
</head>	

<body>

	<table>
		<tr>
			<th> Brand </th>
			<th> Product </th>
			<th> Number of items in stock </th>
			<th> Price per item </th>
		</tr>
		
		<?php
		require_once "openDatabase.php";
		
		//$sql = "SELECT inv_key, product_code, nr_of_items, price FROM inventory";
		$sql = "SELECT b.brand_name, p.model_name, i.nr_of_items, i.price
				FROM products p
				LEFT JOIN brands b ON b.brand_id = p.brand_id
				LEFT JOIN inventory i ON i.product_code = p.product_id";
		$result = $connection ->query($sql);
		if($result -> num_rows > 0){
			while($row = $result -> fetch_assoc()){
				//echo "<tr><td>" . $row["inv_key"]. "</td><td>" . $row["product_code"] . "</td><td>". $row["nr_of_items"]. "</td><td>". $row["price"]. "</td></tr>";
				echo "<tr><td>" . $row["brand_name"]. "</td><td>" . $row["model_name"] . "</td><td>". $row["nr_of_items"]. "</td><td>". $row["price"]. "</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "no results";
		}
		?>
	</table>
	
	<a href="welcome.php" class="btn btn-danger">Return to the welcome page</a>
</body>


</html>