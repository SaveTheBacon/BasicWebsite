<?php

		
	function openDatabase(){
		$db_host = "localhost";
		$db_user = "pro_user";
		$db_password = "2Ox40CRfJxBHMdXB";
		$db_database = "projectDB";
		
		$connection = new mysqli($db_host, $db_user, $db_password, $db_database) or die ("Connection failed: %s \n". $connection->error);
		
		return $connection;
	}
		
	function closeDatabase($connection) {
		$connection->close();			
	}     
    
	

?>