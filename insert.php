<?php

 require_once "openDatabase.php";

$brand_id = $_POST["brand_id"];
$model_name = $_POST["model_name"];
$product_type = $_POST["product_type_name"];

if($product_type == "keyboard"){
	$product_type_id = 1;
}
else{
	if($product_type == "mouse"){
		$product_type_id = 2;
	}
	else{
		if($product_type == "headphones"){
			$product_type_id = 3;
		}
		else{
			$product_type_id = null;
		}
	}
}


$modelSQL = "INSERT INTO products (brand_id, model_name, product_type_id) values (\"$brand_id\", \"$model_name\", \"$product_type_id\")";


if(!mysqli_query($connection, $modelSQL)){
	echo "model insertion failed";
}
else{
	echo "model insertion successful";
}

header("refresh:2; url = insertProduct.php");
?>