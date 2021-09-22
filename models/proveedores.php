<?php

// models/Proveedores.php

class Proveedores extends Model {

	
	public function getTodos() {

		$this->db->query("SELECT * FROM proveedores");
		return $this->db->fetchALL();
	}

	public function AgregarProveedor($nom, $direc, $tel, $envio){

		//validacion nombre!
		if(strlen($nom)<3) throw new ValidacionException('El nombre no puede ser menor a 3 caracteres');
		$nom=substr($nom,0, 30);
		$nom=$this->db->escape($nom);

		//validacion direccion!
		if(strlen($direc)<3) throw new ValidacionException('La direccion  no puede ser menor a 3 caracteres');
		$direc=substr($direc,0, 100);
		$direc=$this->db->escape($direc);

		//validacion telefono!
		if(!ctype_digit($tel)) throw new ValidacionException('El telefono no es correcto');
		if($tel<1) throw new ValidacionException('El telefono no puede ser menor a 1');
		if($tel>9999999999) throw new ValidacionException('El telefono no puede ser mayor a 9999999999');

		//validacion envio!
		if(!ctype_digit($envio)) throw new ValidacionException('El envio no es correcto');
		if($envio<1) throw new ValidacionException('Error 1 en envio');
		if($envio>2) throw new ValidacionException('Error 2 en envio');
		if($envio==1) $envio='SI';
		if($envio==2) $envio='NO';


		$this->db->query("	INSERT INTO proveedores (nombre, direccion, telefono, envio) 
							VALUES 
							('$nom', '$direc', '$tel', '$envio') ");
	}

	public function proveedorLike($nom){

		//validacion nombre a buscar!
		if(strlen($nom)<3) throw new ValidacionException('El nombre no puede ser menor a 3 caracteres');
		$nom=substr($nom, 0, 30);
		$nom= $this->db->escape($nom);
		$nom= $this->db->escapeWildcards($nom);

		$this->db->query("SELECT * FROM proveedores
						WHERE nombre LIKE '%$nom%' ");
		return $this->db->fetchALL();

	}

	public function datosDeUnProveedor($id){
		//validacion de id!
		if(!ctype_digit($id)) throw new ValidacionException('Error 1 de id de proveedor');
		if($id<1) throw new ValidacionException('Error 2 de id de proveedor');

		$this->db->query("SELECT * FROM proveedores
										WHERE proveedor_id = $id LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionException('Error 3 de id de proveedor');

		return $this->db->fetch();
	}

	public function eliminarProv($id){
		//validacion de id!
		if(!ctype_digit($id)) throw new ValidacionException('Error 1 de id de eliminacion de proveedor');
		if($id<1) throw new ValidacionException('Error 2 de id de eliminacion de proveedor');

		$this->db->query("SELECT * FROM proveedores
										WHERE proveedor_id = $id LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionException('Error 3 de id de eliminacion de proveedor');

		$this->db->query("DELETE FROM proveedores
							WHERE proveedor_id = $id LIMIT 1");
	}

	public function EditarProveedor($id, $nom, $direc, $envio, $tel){

		//validacion id!
		if(!ctype_digit($id)) throw new ValidacionException('Error 1 de id de editar de proveedor');
		if($id<1) throw new ValidacionException('Error 2 de id de editar de proveedor');

		$this->db->query("SELECT * FROM proveedores
										WHERE proveedor_id = $id LIMIT 1");

		if($this->db->numRows() != 1) throw new ValidacionException('Error 3 de id de editar de proveedor');

		//validacion nombre
		if(strlen($nom)<3) throw new ValidacionException('El nombre no puede ser menor a 3 caracteres');
		$nom=substr($nom,0, 30);
		$nom=$this->db->escape($nom);

		//validacion direccion
		if(strlen($direc)<5) throw new ValidacionException('Ls direccion no puede ser menor a 5 caracteres');
		$direc=substr($direc,0, 100);
		$direc=$this->db->escape($direc);

		//validacion envio
		if(!ctype_digit($envio)) throw new ValidacionException('Error 1 de envio');
		if($envio<1) throw new ValidacionException('Error 2 de envio');
		if($envio>2) throw new ValidacionException('Error 3 de envio');
		if($envio==1) $envio='SI';
		if($envio==2) $envio='NO';

		//validacion telefono
		if(!ctype_digit($tel)) throw new ValidacionException('El telefono no es correcto');
		if($tel<1) throw new ValidacionException('El telefono no puede ser menor a 1');
		if($tel>9999999999) throw new ValidacionException('El telefono no puede ser mayor a 9999999999');


		$this->db->query("UPDATE proveedores
							SET nombre = '$nom',
							direccion = '$direc',
							telefono = '$tel',
							envio = '$envio'
							WHERE proveedor_id = $id ");

	}

}

class ValidacionException extends Exception {}