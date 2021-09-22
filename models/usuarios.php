<?php

//models/usuarios.php

class usuarios extends model {


public function inicioSesion($email,$pass) {

	if(count($_POST) > 0 ) {

		// validar

		if(strlen($email)<3) throw new VaalidacionException('El email no puede ser menor a 3 caracteres');
		$email=substr($email, 0, 200);
		$email= $this->db->escape($email);
			
		//entiendo que no hace falta validar "password" porque pasa por sha1 y por lo tanto de haber alguna inyeccion, lo que llega aca es un hash y no codigo

			$res = $this->db->query(   "SELECT * 
										FROM  usuarios
										WHERE email = '$email' and password ='$pass' 

										LIMIT 1 ");


			if($this->db->numRows($res) == 1 ) {

				$_SESSION['logueado'] = true;
				header("location: inicio");
				exit;
			}	




		}



	}

}

class VaalidacionException extends Exception {}