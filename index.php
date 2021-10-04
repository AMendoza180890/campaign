<?php
require_once 'controlador/plantillaC.php';
require_once 'controlador/seccionesC.php';
require_once 'controlador/tituloC.php';

require_once 'modulo/seccionesM.php';
require_once 'modulo/tituloM.php';

$plantilla = new plantillaControlador();
$plantilla -> llamarPlantilla();
?>