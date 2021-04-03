<?php

 require_once "openDatabase.php";

$inventory_id = $_POST["inv_id"];
$inventory_num = $_POST["inv_number"];



$inventorySQL = "UPDATE inventory SET nr_of_items = \"$inventory_num\" WHERE inv_key = \"$inventory_id\"";

if(!mysqli_query($connection, $inventorySQL)){
	echo "inventory update failed";
}
else{
	echo "inventory update successful";
}

header("refresh:2; url = editInventory.php");
?>