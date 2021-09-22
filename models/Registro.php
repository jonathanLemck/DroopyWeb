<?php

//models/Registro.php

class Registro extends  Model {


	public function getTodos() {

		$this->db->query("SELECT r.registro_id, r.cantidad, r.precio_unidad, r.precio_total, r.producto, r.fecha, r.tipo, p.nombre proveedor FROM registro r
left join proveedores p on p.proveedor_id = r.proveedor_id");
		return $this->db->fetchALL();
	}




	public function registrar($provid,$prod,$cant,$unidad,$total,$fecha,$tipo) {
		//validacion proveedor
		if(!ctype_digit($provid)) throw new Validacion3Exception('Error 1 de id de registrar de proveedor');
		if($provid<1) throw new Validacion3Exception('Error 2 de id de registrar de proveedor');

		$this->db->query("SELECT * FROM proveedores
										WHERE proveedor_id = $provid LIMIT 1");

		if($this->db->numRows() != 1) throw new Validacion3Exception('Error 3 de id de registrar de proveedor');

		//validacion prod
		if(strlen($prod)<3) throw new Validacion3Exception('El nombre no puede ser menor a 3 caracteres');
		$prod=substr($prod, 0, 200);
		$prod= $this->db->escape($prod);

		//validacion cant
		if(!ctype_digit($cant)) throw new Validacion3Exception('La cantidad no es correcta');
		if($cant<1) throw new Validacion3Exception('La cantidad no puede ser menor a 1');
		if($cant>9999999999) throw new Validacion3Exception('La cantidad no puede ser superior a 9999999999');


		//unidad
		if(!is_numeric($unidad)) throw new Validacion3Exception('Error 1 unidad');
		if($unidad<1) throw new Validacion3Exception('Error 2 unidad');
		if($unidad>9999999999) throw new Validacion3Exception('Error 3 unidad');

		//total
		if(!is_numeric($total)) throw new Validacion3Exception('El precio total no es correcto');
		if($total<1) throw new Validacion3Exception('El precio total no puede ser menor a 1');
		if($total>9999999999) throw new Validacion3Exception('El precio total no puede ser superior a 9999999999');

		//tipo


		//fecha
		$date = strtotime($fecha);

		$date = date('Y-m-d', $date);



		//COMPRA

		if ($tipo == "compra") {

			
				$this->db->query("SELECT * FROM productos
											WHERE nombre = '$prod' LIMIT 1");


			if($this->db->numRows() == 1){	//si existe el producto se actualiza

				$this->db->query("UPDATE productos
									SET 
									cantidad = cantidad + $cant,
									precio_compra = $unidad
									WHERE nombre = '$prod' ");
				
	
				
				
	

			}


			else {
				
				$this->db->query("INSERT INTO productos (proveedor_id, nombre, cantidad, precio_compra) VALUES ('$provid','$prod','$cant','$unidad') ");

				

			}



			$this->db->query("INSERT INTO registro (proveedor_id, cantidad, precio_unidad, precio_total, producto, fecha, tipo ) VALUES('$provid','$cant','$unidad','$total','$prod','$date','$tipo') ");


		}

		//VENTA

		else {

			


			$this->db->query("SELECT * FROM productos
										WHERE nombre = '$prod' LIMIT 1");

			if($this->db->numRows() != 1) die("producto no encontrado");

			
			
				$this->db->query("UPDATE productos
									SET 
									cantidad = cantidad - $cant
									WHERE nombre = '$prod' ");

				
			


			$this->db->query("INSERT INTO registro (proveedor_id, cantidad, precio_unidad, precio_total, producto, fecha, tipo ) VALUES('$provid','$cant','$unidad','$total','$prod','$date','$tipo') ");
		
		
		} 

		
	}



}

class Validacion3Exception extends Exception {}