<!--html/FormAltaProveedor.php-->

<!DOCTYPE html>
<html>
<head>
	<title>Alta de proveedores</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/formProv.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>
<body>
	<ul class="menu">
		<li class="home"><a href="listado-Proveedores"><span class="icon-arrow-left2"></span></a></li>
		<li><h1>Alta de Proveedores</h1></li>
	</ul>

	<div class="principal">
	
	<div class="div1">
		<form action="" method="POST">
		
		<div class="div">
			<input type="text" name="nombre" id="nombre" maxlength="30" placeholder="Nombre..." required="" />
		</div>
		
		<div class="div">
			<input type="text" name="direccion" id="direc" maxlength="100" placeholder="dirección..." required="" />
		</div>
		
		<div class="div">
			<input type="text" name="telefono" id="tel" placeholder="Teléfono..." required="" />
		</div>
		
	</div>
	
	<div class="div2">
		<div class="diva">
			<label for="env">Envio </label>
		<select id="env" name="envio">
			<option value="1">SI</option>
			<option value="2">NO</option>
		</select>
		</div>
		
		<div class="diva">
			<input type="submit" name="Agregar proveedor" value="Añadir">
		</div>
		
	</form>
	</div>
	

	</div>

</body>
</html>