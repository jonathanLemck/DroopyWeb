<?php

// controllers/ListarCategorias.php

require '../fw/fw.php';
require '../models/Categorias.php';
require '../views/ListadoCategorias.php';
require '../views/login.php';

$c = new Categorias();
$categorias = $c->getTodos();


$v = new ListadoCategorias();
$v->categorias = $categorias;

$v->render();