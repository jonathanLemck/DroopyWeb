<!-- html/ResultadoBuscadorProd.php-->

<!DOCTYPE html>
<html>
<head>
	<title>Resultados del buscador</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/resultProd.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>
<body>
	<ul class="menu">
		<li class="home"><a href="listado-Productos"><span class="icon-arrow-left2"></span></a></li>
		<li><h1>Resultados</h1></li>
	</ul>


<div class="center">
	

<table>
	<thead>
		
	
		<tr>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Cantidad</th>
			<th>Categoria</th>
			<th>Precio compra</th>
			<th>Precio venta </th>
			<th>Proveedor</th>
			<th class="icon"><span  class="icon-bin"></span></th>
			<th class="icon"><span  class="icon-pencil"></span></th>

		</tr>

	</thead>
		<?php foreach ($this->productos as $p) { ?>
		<tr>
			<td><?= $p['nombre']?> </td>
			<td> <?= $p['descripcion'] ?>	</td> 
			<td> <?= $p['cantidad']	?> </td>
			<td> <?= $p['categoria'] ?> </td>
			<td> <?= $p['precio_compra'] ?>	</td>
			<td> <?= $p['precio_venta'] ?> </td>
			 <td> <?= $p['proveedor'] ?> </td>
			 <td> 
				<form action="eliminarP" method="POST">
					<input type="submit" name="eliminar" value="Eliminar"/>
					<input type="hidden" name="id" value="<?= $p['producto_id']?>"/>
					<input type="hidden" name="nombre" value="<?=$p['nombre']?>"/>
				</form>
			</td>
			<td> 
				<form action="editar-Producto" method="POST">
					<input type="submit" name="editar" value="Editar"/>
					<input type="hidden" name="id" value="<?= $p['producto_id']?>"/>
					<input type="hidden" name="nombre" value="<?=$p['nombre']?>"/>
					<input type="hidden" name="descripcion" value="<?=$p['descripcion']?>"/>
					<input type="hidden" name="cantidad" value="<?=$p['cantidad']?>"/>
					<input type="hidden" name="cantidad" value="<?=$p['categoria_id']?>"/>
					<input type="hidden" name="precio_compra" value="<?=$p['precio_compra']?>"/>
					<input type="hidden" name="precio_venta" value="<?=$p['precio_venta']?>"/>
					<input type="hidden" name="proveedor_id" value="<?=$p['proveedor_id']?>"/>
				</form>
			</td>
		</tr> 
		<?php } ?>



	</table>
	</div>

</body>
</html>