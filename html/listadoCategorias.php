<!-- html/ListadoCategorias.php -->

<!DOCTYPE html>

<html>
<head>
	<title> Lista de categorias </title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/tablaCat.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>

<body>
	
	<ul class="menu">
		<li class="home"><a href="inicio"><span class="icon-home"></span></a></li>
		<li><h1> Listado de categorias </h1></li>
	</ul>


	

	<div class="center">

	<table>
		<thead>
			<tr><th>ID</th><th>Nombre</th></tr>
		</thead>
		


		<?php foreach ($this->categorias as $c) { ?>
		<tr>
			<td> <?= $c['categoria_id']	?> </td>
			<td> <a href="productos-categorias?c=<?=$c['categoria_id'] ?>"><?= $c['nombre'] ?></a></td> 
		</tr>
		<?php } ?>

	</table>
	


 	</div>
</body>

</html>