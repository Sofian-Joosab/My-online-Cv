<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="../Css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form action="../codes/logincode.php" method="POST">
        <div class="error">
                 <?php 

                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if (strpos($url, 'error=empty') !== false) {
                    echo "*Username or password incorrect!*<p>";
               }
                ?>
            </div>
        Username:
       <input type="text" name="username" placeholder="Username"/> <p>
         Password:
        <input type="password" name="password" placeholder="Password"/><p>
        <button type="submit" name="Login">Login</button><p><br>
        <a href="register.php">Register Here</a>
        </form>
    
    </div>
</body>
</html>