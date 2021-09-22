<!DOCTYPE html>
<html>
<head>
	<title> Lista de productos </title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/prodCate.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>

<body>
	<ul class="menu">
		<li class="home"><a href="listado-Categorias"><span class="icon-arrow-left2"></span></a></li>
		<li><h1>Productos por categoria</h1></li>
	</ul>
	
	<div class="center">
 	<table>
 		<thead>
 			
 		
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Cantidad</th>
			<th>Precio compra</th>
			<th>Precio venta </th>
			<th>Proveedor</th>
		</tr>
		</thead>
		
		<?php foreach ($this->productos as $p) { ?>
		<tr>
			<td><?= $p['producto_id']?> </td>
			<td><?= $p['nombre']?> </td>
			<td> <?= $p['descripcion'] ?>	</td> 
			<td> <?= $p['cantidad']	?> </td>
			<td> <?= $p['precio_compra'] ?>	</td>
			<td> <?= $p['precio_venta'] ?> </td>
			<td> <?= $p['proveedor'] ?> </td>
			 
		</tr> 
		<?php } ?>



	</table>

	</div>
</body>

</html>