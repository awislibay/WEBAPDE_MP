<?php
	session_start();
	if(!isset($_SESSION["trainerID"])){
		header("Location: login.php");
		exit(); 
	}
?>