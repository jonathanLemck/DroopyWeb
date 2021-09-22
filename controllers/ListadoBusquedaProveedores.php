<?php

//controllers/ListadoBusquedaProveedores.php

require '../fw/fw.php';
require '../models/Proveedores.php';
require '../views/BuscadorProveedor.php';
require '../views/ListadoProveedores.php';
require '../views/login.php';

$p = new Proveedores();
$prov = $p->getTodos();

$v1= new BuscadorProveedor();



$v2= new ListadoProveedores();
$v2->proveedores=$prov;

$v1->render();
$v2->render();