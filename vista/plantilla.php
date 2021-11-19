<?php
    //header
    include_once 'modulos/encabezado.php';
    include_once 'modulos/menuAndLogo.php';

    //incluimos el contenido de la pagina
    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "index" || $_GET["ruta"] == "proyect" ) {
            include 'modulos/'.$_GET["ruta"].".php";    
        }
    }else {
        include 'modulos/index.php';
    }

    //Footer
    include_once 'modulos/pie.php';
?>