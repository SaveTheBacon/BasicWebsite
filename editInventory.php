<!DOCTYPE html>
<html>
<head>
	<title> Edit Inventory numbers </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
	<style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<body>
	<form action = "editInventoryUtil.php" method = "post">
		Inventory ID: <input type = "text" name = "inv_id">
		<br>
		New number: <input type = "text" name = "inv_number">
		<br>
		<input type = "submit" value = "submit">
	</form>
	
	<p>
		<a href = "adminPanel.php" class = "btn btn-danger"> Return to admin panel </a>
	</p>
</body>

</html>