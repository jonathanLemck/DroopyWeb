<?php


//controllers/registro.php

require '../fw/fw.php';
require '../models/Registro.php';
require '../views/login.php';
require '../views/RegistroHistorial.php';


$reg = new Registro();
$r = $reg->getTodos();


$v = new RegistroHistorial();
$v->registro = $r;

$v->render();


