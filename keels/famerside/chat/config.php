<?php

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "keels";

	$db = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($db->connect_error) {
	  
	}


?>