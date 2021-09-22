<!-- html/EliminarProveedor.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Proveedor </title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/eliminarProv.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>
<body>

	<ul class="menu">
		<li class="home"><span class="icon-cross"></span></li>
		<li><h1>Eliminación de proveedor</h1></li>
	</ul>

	<div class="principal">

	<div class="cont">
			<img class="img" src="proyecto/../static/img/caution.png">
		</div>
		<div>
			<h1>¿Está seguro que desea eliminar el proveedor <?=$this->nombre?> ?</h1>
		</div>

	<div class="botones">
	<div class="fml">
	<form action="eliminar-Prov" method="POST">
		<input type="submit" name="si" value="Si" />
		<input type="hidden" name="id" value="<?=$this->id?>" />
		<input type="hidden" name="nombre" value="<?=$this->nombre?>" />
	</form>
	</div>
	<div class="fml">
	<form action="eliminar-Prov" method="POST">
		<input type="submit" name="no" value="No" />
		<input type="hidden" name="id" value="<?=$this->id?>" />
		<input type="hidden" name="nombre" value="<?=$this->nombre?>" />
	</form>
	</div>
	</div>
	</div>
</body>
</html>	