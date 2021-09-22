<!-- html/FormAltaProductos.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Alta Productos</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/formProd.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head> 
<body>

	<ul class="menu">
		<li class="home"><a href="listado-Productos"><span class="icon-arrow-left2"></span></a></li>
		<li><h1>Alta de Productos</h1></li>
	</ul>

	<div class="principal">
	
	<div class="div1">
		
	
	<form action="" method="post">

		<div class="div">
			<input type="text" name="nombre" id="nombre" required="" placeholder="Nombre..." />
		</div>
		
		<div class="div">
			<input type="text" name="descripcion" id="descripcion" required="" placeholder="Descripcion..." />
		</div>
		
		<div class="div">
			<input type="text" name="cantidad" id="cantidad" required="" placeholder="Cantidad..." />
		</div>
		
		<div class="div">
			<input type="text" name="compra" id="compra" required="" placeholder="Precio de compra..." />
		</div>
		
		<div class="div">
			<input type="text" name="venta" id="venta" required="" placeholder="Precio de venta..." />
		</div>
		
		</div>
 
		<div class="div2">
			<div class="diva">
			<label for="categoria">Categoria</label>
		<select name="categoria" id="categoria">

			<?php foreach($this->categorias as $c) { ?>
			<option value="<?= $c['categoria_id']?>"> <?= $c['nombre']?> </option>
			<?php } ?>
		</select>
		</div>
		

		<div class="diva">
			<label for="proveedor">Proveedor:</label>
		<select name="proveedor" id="proveedor">

			<?php foreach($this->proveedor as $p) { ?>
			<option value="<?= $p['proveedor_id']?>"> <?= $p['nombre']?> </option>
			<?php } ?>
		</select>
		</div>
		
		<div class="diva">
			<input type="submit" value="Añadir" />
		</div>
		</div>
		
		

	</form>

	</div>

</body>
</html>