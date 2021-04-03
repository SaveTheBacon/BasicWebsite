<!DOCTYPE html>
<html>
<head>
	<title> Insert products </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
	<style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<body>
	<form action = "insert.php" method = "post">
		Brand ID: <input type = "text" name = "brand_id">
		<br>
		Model name: <input type = "text" name = "model_name">
		<br>
		Product type: <input type = "text" name = "product_type_name">
		<br>
		<input type = "submit" value = "submit">
	</form>
	
	<p>
		<a href = "adminPanel.php" class = "btn btn-danger"> Return to admin panel </a>
	</p>
</body>

</html>