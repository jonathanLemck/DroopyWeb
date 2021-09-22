<!-- html/formAltaRegistro.php -->

<!DOCTYPE html>

<html>
<head>
	<title>Registro de compraventa</title>
	<link rel="stylesheet" type="text/css" href="proyecto/../static/css/formReg.css">
	<link rel="stylesheet" type="text/css" href="proyecto/../static/iconos/fonts/style.css">
</head>
<body>

	<ul class="menu">
		<li class="home"><a href="inicio"><span class="icon-home"></span></a></li>
		<li><h1>Alta de Registros</h1></li>
		<div class="link">
			<li><a href="registro-historial"><span class="icon-file-text2"></span>Historial</a></li>
		</div>
	</ul>

	<div class="principal">
		<div class="div1">
	<form action="" method="post">


		<div class="div">
		<label for="proveedor">proveedor:</label>
		<select name="proveedor" id="proveedor">

			<?php foreach($this->proveedor as $p) { ?>
			<option value="<?= $p['proveedor_id']?>"> <?= $p['nombre']?> </option>
			<?php } ?>
		</select>
		</div>

	
		<div class="div">
		<label for="producto">producto</label>
		<input type="text" name="producto" id="producto" required="" />	
		</div>
	

		<div class="div">
		<label for="cantidad">cantidad: </label>
		<input type="number" name="cantidad" id="cantidad" value="" required="" />
		</div>


		<div class="div">
		<label for="precio_unidad">Precio unidad: $ </label>
		<input type="number" name="precio_unidad" id="precio_unidad" value="" onchange="multiplicar()" required="" />
		</div>
	</div>
		<div class="div2">
		<div class="diva">
		<label for="precio_total">precio total:$ </label>
		

		<script type="text/javascript"> 

			function multiplicar() {

			var x = document.getElementById('cantidad').value; 
    		var y = document.getElementById('precio_unidad').value;
    		var result = document.getElementById('precio_total'); 
    		var Resultado = x * y;
    		document.getElementById('precio_total').value = Resultado;
		}
		</script>

		
		<input type="number" name="precio_total" id="precio_total" value=""  readonly required="" />
		

	</div>

	
		<div class="diva">
		<label for="fecha">fecha: </label>
		<input type="date" name="fecha" id="fecha" value="" required="" />
		</div>

		
		<div class="diva">
		<label for="compra"> Compra </label>
		<input class="rad" type="radio" name ="compraventa" id="compra" value="compra" checked="checked"/>
		

		
		<label for="venta"> Venta </label>
		<input type="radio" name ="compraventa" id="venta" value="venta"/>
		</div>
		

	
		<div class="divaa">
		<input type="submit" value="Registrar" />
		</div>

	</form>
	</div>
	</div>
</body>



</body>
</html>