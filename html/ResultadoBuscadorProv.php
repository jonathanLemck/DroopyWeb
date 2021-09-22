<!-- html/ResultadoBuscadorProv.php-->

<!DOCTYPE html>
<html>
<head>
	<title>Resultados del buscador</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/resultProv.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">

</head>
<body>

	<ul class="menu">
		<li class="home"><a href="listado-proveedores"><span class="icon-arrow-left2"></span></a></li>
		<li><h1>Resultados</h1></li>
	</ul>

	<div class="center">
		

	<table>
		<thead>
			
		
		<tr>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Telefono</th>
			<th>Envio</th>
			<th class="icon"><span  class="icon-bin"></span></th>
			<th class="icon"><span  class="icon-pencil"></span></th>

		</tr>
		</thead>

		<?php foreach ($this->proveedores as $p) { ?>
		<tr>
			<td><?= $p['nombre']?></td>
			<td> <?= $p['direccion'] ?>	</td> 
			<td> <?= $p['telefono']	?> </td>
			<td> <?= $p['envio'] ?>	</td> 
			<td> 
			<form action="eliminar-Prov" method="POST">
				<input type="submit" name="eliminar" value="Eliminar"/>
				<input type="hidden" name="id" value="<?= $p['proveedor_id']?>"/>
				<input type="hidden" name="nombre" value="<?=$p['nombre']?>"/>
			</form>
		</td>
		<td> 
			<form action="editar-Proveedor" method="POST">
				<input type="submit" name="editar" value="Editar"/>
				<input type="hidden" name="id" value="<?= $p['proveedor_id']?>"/>
				<input type="hidden" name="nombre" value="<?=$p['nombre']?>"/>
				<input type="hidden" name="direccion" value="<?=$p['direccion']?>"/>
				<input type="hidden" name="telefono" value="<?=$p['telefono']?>"/>
				<input type="hidden" name="envio" value="<?=$p['envio']?>"/>
			</form>
		</td>
		</tr>
		<?php } ?>

	</table>
		</div>
	
</body>
</html>