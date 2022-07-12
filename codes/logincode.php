<?php 
session_start();

include 'db-con.php';

$username = $_POST['username'];
$password = $_POST['password'];




	$sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password '";
	$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
	 
	 header("Location:../pages/Login_Register.php?error=empty");
	 exit();
}else{
	  $_SESSION['name'] = $row['username'];
	  $_SESSION['id'] = $row['id'];
	  $_SESSION['phone']= $row['telefone'];
	   $_SESSION['email']= $row['email'];
	}
		header("Location: ../pages/system.php");
			exit();

 ?>