<!-- html/EditProducto.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Editar datos del producto</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/editProd.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>
<body>

	<ul class="menu">
		<li class="home"><a href="listado-Productos"><span class="icon-arrow-left2"></span></a></li>
		<li><h1>Formulario para editar producto</h1></li>
	</ul>

	<div class="principal">
		
	<div class="div1">
		
	

	<form action="editar-Producto" method="POST">


		<div class="div">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre" maxlength="30" value="<?=$this->datosProducto['nombre']?>" />
		</div>
		

		<div class="div">
		<label for="desc">Descripcion:</label>
		<input type="text" name="descripcion" id="desc" maxlength="100" value="<?=$this->datosProducto['descripcion']?>"/>
		</div>


		<div class="div">
		<label for="cant">Cantidad:</label>
		<input type="text" name="cantidad" id="cant" value="<?=$this->datosProducto['cantidad']?>"/>
		</div>


		<div class="div">

			<label for="tel">Precio compra: </label>
			<input type="text" name="precio_compra" id="cant" value="<?=$this->datosProducto['precio_compra']?>"/>
		</div>
		
		</div>
		<div class="div2">

		<div class="diva">
			
		<div class="a">
		<label for="tel">Precio venta: </label>
		<input type="text" name="precio_venta" id="cant" value="<?=$this->datosProducto['precio_venta']?>"/>

		</div>

		</div>

		
		<div class="diva"> 
			
			<?php
				$provAEditar = $this->datosProducto['proveedor_id'];
			?>
			<label for="aa">Proveedor:</label>
			<select name="id_proveedor" id="aa" >
				<?php foreach($this->proveedores as $p) { 

					if($provAEditar === $p['proveedor_id']) 
					{ ?>
					<option value="<?= $p['proveedor_id']?>" selected> <?= $p['nombre']?> </option>

			<?php } else { ?>
				<option value="<?= $p['proveedor_id']?>"> <?= $p['nombre']?> </option>
			<?php } }?>
			</select>
		</div>
		<div class="diva">
			<?php
				$catAEditar = $this->datosProducto['categoria_id'];
			?>
			<label id="pp">Categoria:</label>
			<select name="categoria_id" id="pp">
				<?php foreach($this->categorias as $c) { 

					if($catAEditar === $c['categoria_id']) 
					{ ?>
					<option value="<?= $c['categoria_id']?>" selected> <?= $c['nombre']?> </option>

			<?php } else { ?>
				<option value="<?= $c['categoria_id']?>"> <?= $c['nombre']?> </option>
			<?php } }?>
			</select>
		</div>
		
		


		

		<input type="hidden" name="id" value="<?=$this->datosProducto['producto_id']?>"/>

		<div class="divbut">
			<input type="submit" name="actualizar" value="Actualizar">
		</div>
		
	</form>
	</div>
	</div>
	</div>
</body>
</html>