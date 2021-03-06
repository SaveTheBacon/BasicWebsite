<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
		<a href = "store.php" class = "btn btn-danger"> View our products </a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
		<?php 
		if ($_SESSION["isAdmin"] == 1){
			//echo "<a href = \"adminPanel.php\" Administration panel </a>";
			echo "<br><br> Welcome, administator <br>";
			echo "<a href=\"adminPanel.php\" class=\"btn btn-danger\">Admin panel</a>";
		}
		?>
    </p>
</body>
</html>