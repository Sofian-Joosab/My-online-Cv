<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Settings</title>
	<!-- javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/js/tinymce/init-tinymce.js"></script>
</head>
<body>

	

	<form action="#">
		First Name: <input type="text" name="first"  required placeholder="John"><br>
		Last Name: <input type="text" name="last" required placeholder="Junior"><br>
        Contacto: <input type="text" name="phone" pattern="[0-9]9}" required placeholder="00258123456789"><br> 
        E-mail: <input type="text" name="email" required placeholder="John@gmail.com"><br> 
        Morada: <input type="text" name="morada" required placeholder="Rua do bagamoio, N400"><br> 
        Educacao:<input type="text" name="morada" required placeholder="...."><br>
        Qualificacoes Profissionais:<input type="text" name="morada" required placeholder="..."><br> 
        Experiencia de Trabalho:<input type="text" name="morada" required placeholder="....."><br> 
        Linguas:<input type="text" name="morada" required placeholder="portugues,ingles"><br> 
        Perfil:
        <textarea class="tinymce" name="perfil" placeholder="Escreva algo sobre si aqui!"> </textarea><br>
        
		<button type="submit">Update</button>
	</form>
</body>
</html>