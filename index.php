<?php
/* En esta pagna se mostrarán las salidas de las vistas al usuario y tambien a través de ella se enviarán las distintas acciones que el ususaro envie al controlador */
#require vs include -> trae las clases qe tiene el controlador.php
require_once "controllers/controlador.php";
$mvc = new Mvccontroller();
$mvc->plantilla();
?>