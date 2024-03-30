<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="wms";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);
	if(!$conn)
        {
          die('Could not Connect MySql Server:');
        }
?>