<!-- html/BuscadorProveedor.php -->

<!DOCTYPE html>

<html>
<head>
	<title>Buscador</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/busca.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>

<body>
	

	<ul class="menu">
		<li class="home"><a href="inicio"><span class="icon-home"></span></a></li>
		<li>
			<div class="buscar">
				<form action="busqueda-proveedor" method="GET">
				 	<input class="inputBus" type="text" name="nombre" id="buscador" maxlength="30" placeholder="proveedor..." />
				 	<div class="btn">
				 		<button type="submit" name="buscar">
				 			<span class="icon-search"></span>
				 		</button>
				 	</div>
				 	
			 	</form>
			</div>
		</li>
		<div class="link">
			<li><a href="agregar-Proveedor"><span class="icon-upload"></span>Cargar Proveedor</a></li>
		</div>
		
	</ul>
	
</body>

</html>