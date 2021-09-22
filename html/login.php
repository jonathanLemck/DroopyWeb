<!-- html/login.php -->

<?php

require '../fw/fw.php';
require '../models/usuarios.php';
	
	session_start();


	$usuario = new usuarios();
	

if(count($_POST) > 0 ) {

	$usuario->inicioSesion($_POST['email'],sha1($_POST['pass']));

}



?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>
<body>
	<div class="principal">
		<div class="segundo">
	<form action="" method="post">
		<div>
		<input type="text" name="email" placeholder="Email..." /> 
		</div>
		<div>
		<input type="password" name="pass" placeholder="Password..." /> 
		</div>

		<div class="enviar">
			<input type="submit" value="Iniciar sesion" />
		</div>
		

	</form>
	</div>
	</div>




</body>
</html>