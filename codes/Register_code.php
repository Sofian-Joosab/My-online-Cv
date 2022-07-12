<?php
	session_start();

include 'db-con.php';


$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];

if(empty($first) || !ctype_alpha($first)){
	header("Location:../pages/register.php?error=emptyfirst");
	exit();

}if(empty($last) || !ctype_alpha($first)){
	header("Location:../pages/register.php?error=emptylast");
	exit();

}if(empty($username)){
	header("Location:../pages/register.php?error=empty");
	exit();

}if(empty($password)){
	header("Location:../pages/register.php?error=empty");
	exit();

}if(empty($phone) || !ctype_digit($phone)){
	header("Location:../pages/register.php?error=emptyPhone");
	exit();
}if(empty($email)){
	header("Location:../pages/register.php?error=emptyemail");
	exit();
}if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location:../pages/register.php?error=Email");
	exit();

}else{
	$sql ="SELECT username FROM users WHERE username='$username'"; 
	$result = $conn->query($sql);
	$usernamecheck = mysqli_num_rows($result);
		if ($usernamecheck > 0) {
			header("Location:../register.php?error=username");
			exit();
		}else{
		$sql = "INSERT INTO users (nome, sobrenome, username, password,telefone,email) 
		VALUES ('$first', '$last', '$username', '$password','$phone','$email')";
		$result = $conn->query($sql);
		header("Location:../pages/register.php?done=complete");
	}

}

