<?php
	// Enter your Host, username, password, database below.
	$con = mysqli_connect("localhost","root","","introdb");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to Database: " . mysqli_connect_error();
	}
?>