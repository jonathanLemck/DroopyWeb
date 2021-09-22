<?php

// models/Productos.php

class Productos extends Model {

	public function getTodos() {
		$this->db->query("SELECT p.producto_id, p.nombre, p.descripcion, p.cantidad, p.precio_compra, p.precio_venta, c.nombre categoria, c.categoria_id, prov.proveedor_id, prov.nombre proveedor FROM productos p
			left join categorias c on p.categoria_id = c.categoria_id 
			left join proveedores prov on prov.proveedor_id=p.proveedor_id");
		return $this->db->fetchAll();


	}


	public function agregarProducto($cat, $nom, $desc, $cant, $pre_co, $pre_ven, $prov ) {


		//validacion cantidad
		if(!ctype_digit($cant)) throw new ValidacionExceptionn('La cantidad no es correcta');
		if($cant<1) throw new ValidacionExceptionn('La cantidad no puede ser menor a 1');
		if($cant>9999999999) throw new ValidacionExceptionn('La cantidad no puede ser superior a 9999999999');

		//validacion precio compra
		if(!is_numeric($pre_co)) throw new ValidacionExceptionn('El precio de compra no es correcto');
		if($pre_co<1)throw new ValidacionExceptionn('El precio de compra no puede ser menor a 1');
		if($pre_co>9999999999) throw new ValidacionExceptionn('El precio de compra no puede ser superior a 9999999999');

		//validacion precio venta
		if(!is_numeric($pre_ven)) throw new ValidacionExceptionn('El precio de venta no es correcto');
		if($pre_ven<1) throw new ValidacionException('El precio de venta no puede ser menor a 1');
		if($pre_ven>9999999999) throw new ValidacionExceptionn('El precio de venta no puede ser superior a 9999999999');

		//categoria
		if(!ctype_digit($cat)) throw new ValidacionExceptionn('Error 1 de id de categoria');
		if($cat<1) throw new ValidacionExceptionn('Error 2 de id de categoria');

		$this->db->query("SELECT * FROM categorias
										WHERE categoria_id = $cat LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionExceptionn('No esta esa categoria');

		//nobre
		if(strlen($nom)<3) throw new ValidacionExceptionn('El nombre no puede ser menor a 3 caracteres');
		$nom=substr($nom, 0, 30);
		$nom= $this->db->escape($nom);


		//descripcion
		if(strlen($desc)<3) throw new ValidacionExceptionn('La descripcion no puede ser menor a 3 caracteres');
		$desc=substr($desc, 0, 200);
		$desc= $this->db->escape($desc);


		//validacion proveedor
		if(!ctype_digit($prov)) throw new ValidacionExceptionn('Error 1 de id de proveedor');
		if($prov<1) throw new ValidacionExceptionn('Error 2 de id de proveedor');

		$this->db->query("SELECT * FROM proveedores
										WHERE proveedor_id = $prov LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionExceptionn('No esta esa proveedor');


		$this->db->query("INSERT INTO productos (categoria_id, nombre, descripcion, cantidad, precio_compra, precio_venta, proveedor_id) VALUES ('$cat', '$nom', '$desc', '$cant', '$pre_co', '$pre_ven', '$prov') ");


	}


	public function datosDeUnProducto($id){
		//validacion de id!
		if(!ctype_digit($id)) throw new ValidacionExceptionn('Error 1 de id de producto');
		if($id<1) throw new ValidacionExceptionn('Error 2 de id de producto');

		$this->db->query("SELECT * FROM productos
										WHERE producto_id = $id LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionExceptionn('No esta ese producto');

		return $this->db->fetch();
	}



public function eliminarProd($id){
		//validacion de id!
		if(!ctype_digit($id)) throw new ValidacionExceptionn('Error 1 de eliminacion de id de producto');
		if($id<1) throw new ValidacionExceptionn('Error 2 de eliminacion de id de producto');
		$this->db->query("SELECT * FROM productos
										WHERE producto_id = $id LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionExceptionn('Error de eliminacion de id de producto');

		$this->db->query("DELETE FROM productos
							WHERE producto_id = $id LIMIT 1");
	}







public function EditarProducto($id, $nom, $desc, $cant, $pre_co, $pre_ven, $prov, $cat){

		
if(!ctype_digit($id)) throw new ValidacionExceptionn('Error 1 de editar de id de producto');
		if($id<1) throw new ValidacionExceptionn('Error 2 de eliminacion de id de producto');

		$this->db->query("SELECT * FROM productos
										WHERE producto_id = $id LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionExceptionn('Error de editar de id de producto');

		//validacion nombre
		if(strlen($nom)<3) throw new ValidacionExceptionn('El nombre no puede ser menor a 3 caracteres');
		$nom=substr($nom,0, 30);
		$nom=$this->db->escape($nom);

		//validacion descripcion
		
		$desc=substr($desc,0, 100);
		$desc=$this->db->escape($desc);


		//validacion cantidad
		if(!ctype_digit($cant))throw new ValidacionExceptionn('La cantidad no es correcta');
		if($cant<1) throw new ValidacionExceptionn('La cantidad no puede ser menor a 1');
		if($cant>9999999999) throw new ValidacionExceptionn('La cantidad no puede ser superior a 9999999999');

		//validacion precio compra
		if(!is_numeric($pre_co)) throw new ValidacionExceptionn('El precio de compra no es correcto');
		if($pre_co<1) throw new ValidacionExceptionn('El precio de compra no puede ser menor a 1');
		if($pre_co>9999999999) throw new ValidacionExceptionn('El precio de compra no puede ser superior a 9999999999');

		//validacion precio venta
		if(!is_numeric($pre_ven)) throw new ValidacionExceptionn('El precio de venta no es correcto');
		if($pre_ven<1) throw new ValidacionExceptionn('El precio de venta no puede ser menor a 1');
		if($pre_ven>9999999999) throw new ValidacionExceptionn('El precio de venta no puede ser superior a 9999999999');

		//validacion categoria
		if(!ctype_digit($cat)) throw new ValidacionExceptionn('Error 1 de id de categoria');
		if($cat<1) throw new ValidacionExceptionn('Error 2 de id de categoria');
		$this->db->query("SELECT * FROM categorias
										WHERE categoria_id = $cat LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionExceptionn('No esta esa categoria');

		//validacion proveedor
		if(!ctype_digit($prov)) throw new ValidacionExceptionn('Error 1 de id de proveedor');
		if($prov<1) throw new ValidacionExceptionn('Error 2 de id de proveedor');

		$this->db->query("SELECT * FROM proveedores
										WHERE proveedor_id = $prov LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionExceptionn('No esta ese proveedor');


		$this->db->query("UPDATE productos
							SET nombre = '$nom',
							descripcion = '$desc',
							cantidad = '$cant',
							precio_compra = '$pre_co',
							precio_venta = '$pre_ven',
							proveedor_id = '$prov',
							categoria_id = '$cat'
							WHERE producto_id = $id ");

	}



public function productoLike($nom){

		//validacion nombre a buscar!
		if(strlen($nom)<3) throw new ValidacionExceptionn('El nombre no puede ser menor a 3 caracteres');;
		$nom=substr($nom, 0, 30);
		$nom= $this->db->escape($nom);
		$nom= $this->db->escapeWildcards($nom);

		$this->db->query("SELECT p.producto_id, p.nombre, p.descripcion, p.cantidad, p.precio_compra, p.precio_venta, c.nombre categoria, c.categoria_id, prov.proveedor_id, prov.nombre proveedor FROM productos p
			left join categorias c on p.categoria_id = c.categoria_id 
			left join proveedores prov on prov.proveedor_id=p.proveedor_id
			WHERE p.nombre LIKE '%$nom%' ");
		return $this->db->fetchALL();

	}

	public function getProdPorCategoria($idCategoria){

		if(!ctype_digit($idCategoria)) throw new ValidacionExceptionn('Error 1 de id de producto');
		if($idCategoria<1) throw new ValidacionExceptionn('Error 2 de id de productr');

		$this->db->query("SELECT * FROM categorias
										WHERE categoria_id = $idCategoria LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionExceptionn('No esta ese producto');

		$id=$idCategoria;

		$this->db->query("SELECT p.producto_id, p.nombre, p.descripcion, p.cantidad, p.precio_compra, p.precio_venta , prov.nombre proveedor FROM productos p 
			left join proveedores prov on prov.proveedor_id=p.proveedor_id
			where categoria_id=$id");
		return $this->db->fetchAll();
	}
}

class ValidacionExceptionn extends Exception {}