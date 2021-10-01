<?php
    //header
    include 'modulos/encabezado.php';
    include 'modulos/menuAndLogo.php';

    //incluimos el contenido de la pagina
    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "index" || $_GET["ruta"] == "proyect" ) {
            include 'modulos/'.$_GET["ruta"].".php";    
        }
    }

    //Footer
    include 'modulos/pie.php';
?>