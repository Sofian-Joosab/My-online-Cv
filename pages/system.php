<?php 
	session_start();

	if(isset($_SESSION['name'])){
    
                }else{
                 header("Location:Login_Register.php?error=empty");
                 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="../Css/home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
 <div class="nav-div">
	<ul>
		 <li><a href="#">DashBoard</a></li>
	     <li><a href="#">Sobre Nos</a></li>
	     <li><a href="#">Como Usar</a></li>
	     <li><a href="#">Inicio</a></li>
     </ul>
 </div>

 <div class="logo">Logo aqui</div>
</header>
<body>
	<!-- Display Usere's name -->
	<?php
                if(isset($_SESSION['name'])){
                echo "Welcome:<u>  ";
                echo $_SESSION['name'];
                if(isset($_SESSION['name'])){
                    echo "</u>  ,<a href='../codes/logout.php'>Click here to Logout</a> ";
                }
                }else{
                echo "You are not logged in!";
                }
                ?>
                <p></p>
    <!-- Display Usere's name end -->

    <a href="../Generate PDF/generate.php"><img src="../img/settings.png" alt="example"></a>
</body>
</html>