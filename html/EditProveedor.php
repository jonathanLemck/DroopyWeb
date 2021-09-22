<!-- html/EditProveedor.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Editar datos del proveedor</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/editProv.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>
<body>

	<ul class="menu">
		<li class="home"><a href="listado-Proveedores"><span class="icon-arrow-left2"></span></a></li>
		<li><h1>Formulario para editar proveedor</h1></li>
	</ul>

	<div class="principal">
		
	<div class="div1">
	<form action="editar-Proveedor" method="POST">

		<div class="div">
		<label for="nombre">Nombre: </label>
		<input type="text" name="nombre" id="nombre" maxlength="30" value="<?=$this->datosProveedor['nombre']?>" />
		</div>

		<div class="div">
		
		<label for="direc">Dirección: </label>
		<input type="text" name="direccion" id="direc" maxlength="100" value="<?=$this->datosProveedor['direccion']?>"/>
		</div>

		<div class="div">
		<label for="tel">Teléfono: </label>
		<input type="text" name="telefono" id="tel" value="<?=$this->datosProveedor['telefono']?>"/>
		</div>

		</div>
		<div class="div2">
			
		
		<div class="diva">
		<label for="env">Envio </label>
		<select id="env" name="envio">
			<?php if($this->datosProveedor['envio']=='SI') { ?>
				<option value="1" selected>SI</option>
				<option value="2">NO</option>
			<?php } else {?>
				<option value="1">SI</option>
				<option value="2" selected>NO</option>
			<?php } ?>
		</select>
		</div>

		<input type="hidden" name="id" value="<?=$this->datosProveedor['proveedor_id']?>"/>
		
		<div class="divbut">
		<input type="submit" name="actualizar" value="Actualizar">
		</div>
	</form>
	</div>
	</div>
</body>
</html>