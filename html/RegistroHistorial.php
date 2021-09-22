<!-- html/ListadoProveedores.php -->

<!DOCTYPE html>

<html>
<head>
	<title> Lista de proveedores </title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/registro.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>

<body>
	
	<ul class="menu">
		<li class="home"><a href="registro"><span class="icon-arrow-left2"></span></a></li>
		<li><h1>Historial de registros</h1></li>
	</ul>

	<div class="center">
	<table>
		<thead>
		<tr>
			<th>ID</th>
			<th>Cantidad</th>
			<th>Precio Unitario</th>
			<th>Precio Total</th>
			<th>Producto</th>
			<th>Fecha</th>
			<th>Tipo</th>
			<th>Proveedor</th>

		</tr>
	</thead>

		
		<?php foreach ($this->registro as $r) { ?>
		<tr>
			<td><?= $r['registro_id']?> </td>
			<td> <?= $r['cantidad'] ?>	</td> 
			<td> <?= $r['precio_unidad']	?> </td>
			<td> <?= $r['precio_total']	?> </td>
			<td> <?= $r['producto']	?> </td>
			<td> <?= $r['fecha'] ?>	</td>
			<td> <?= $r['tipo'] ?>	</td>
			<td> <?= $r['proveedor'] ?>	</td>
		</tr>
		<?php } ?>



	</table>
	</div>
	
</body>

</html>