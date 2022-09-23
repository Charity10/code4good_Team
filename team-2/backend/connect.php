<?php
    $servername = "localhost";
	$user = "root";
	$password = "";
	$database = "codeforgood";
	
	$connection = new mysqli($servername, $user, $password, $database) or die("Not connected".$connection->error);
?>