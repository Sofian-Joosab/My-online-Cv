<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="../Css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

 <div class="error">
                <?php 

                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if (strpos($url, 'error=emptyfirst') !== false) {
                    echo "Please fill out Firstname correctly!<p>";
                }elseif (strpos($url, 'error=emptyfirst') !== false) {
                   echo "Please fill out Lastname correctly!<p>";
                }
                elseif (strpos($url, 'error=username') !== false) {
                    echo "Username already in use!<br> Please pick a different one <p>";
                }
                elseif (strpos($url, 'error=Email') !== false) {
                    echo "Please fill up the e-mail correctly!<p>";
                }
                elseif (strpos($url, 'error=emptyPhone') !== false) {
                    echo "Please fill up the phone number correctly!<p>";
                }
                elseif (strpos($url, 'error=emptyemail') !== false) {
                    echo "Please fill up the e-mail correctly!<p>";
                }

            ?>
           </div>
           <div class="Successfully">
               <?php 
                $url = "http://".$_SERVER['HTTP_HOST'].'/pages'.$_SERVER['REQUEST_URI'];
                if (strpos($url, 'done=complete') !== false) {
                     echo "User Registered Successfully!";
                }

                ?>
           </div>

	<div class="form">
     	<form action="../codes/Register_code.php" method="POST" >
		First Name: <input type="text" name="first"  required placeholder="paul"><br>
		Last Name: <input type="text" name="last" required placeholder="albert"><br>
		Username: <input type="text" name="username" required placeholder="Palbert"><br>	
		Password: <input type="password" name="password"  required placeholder="Password"><br>
        Cell phone: <input type="text" name="phone" pattern="[0-9]9}" required placeholder="00258123456789"><br> 
        E-mail: <input type="text" name="email" required placeholder="Palbert@gmail.com"><br> 
		<button type="submit">SIGN UP</button>
	</form>
    </div>
</body>
</html>