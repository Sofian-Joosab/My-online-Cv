<?php 

	$conn = mysqli_connect("localhost", "root", "", "meucv");

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
		exit();
	}