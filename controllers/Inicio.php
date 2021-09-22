<?php

//controllers/Inicio.phps

require '../fw/fw.php';
require '../views/Inicio.php';
require '../views/login.php';

$v= new Inicio();
$v->render();