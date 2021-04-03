<?php
define ('DB_SERVER', 'localhost');
define ('DB_USERNAME', 'pro_user');
define ('DB_PASSWORD', '2Ox40CRfJxBHMdXB');
define ('DB_NAME', 'projectDB');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>