<?php
	$host = "sulley.cah.ucf.edu";
	$user = "dig4503group7";
	$pass = "knights4321!";
	$database = "dig4503group7";
	$mysqli = new mysqli($host, $user, $pass, $database);
	
	if($mysqli->error)
	{
		print "Error Connecting! Message: ".$mysqli->error;
	}
?>