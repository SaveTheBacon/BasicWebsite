<?php

 require_once "openDatabase.php";

$brand_name = $_POST["brand_name"];


$brandSQL = "INSERT INTO brands (brand_name) values (\"$brand_name\")";

if(!mysqli_query($connection, $brandSQL)){
	echo "brand insertion failed";
}
else{
	echo "brand insertion successful";
}

header("refresh:2; url = adminPanel.php");
?>