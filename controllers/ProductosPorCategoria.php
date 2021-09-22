<?php

// controllers/ProductosPorCategoria.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/ProductosPorCategoria.php';
require '../views/login.php';


if(!isset($_GET['c'])) die ('error de c ');

$p = new Productos();
$resultados = $p->getProdPorCategoria($_GET['c']);

$v= new ProductosPorCategoria();
$v->productos=$resultados;

$v->render();
