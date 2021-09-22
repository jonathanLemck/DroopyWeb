<?php

//controllers/ListadoBusquedaProductos.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/BuscadorProducto.php';
require '../views/ListadoProductos.php';
require '../views/login.php';


$p = new Productos();
$prod = $p->getTodos();

$v1= new BuscadorProducto();



$v2= new ListadoProductos();
$v2->productos=$prod;

$v1->render();
$v2->render();