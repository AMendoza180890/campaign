<?php
class plantillaControlador{
    public function llamarPlantilla(){
        try {
            include 'vista/plantilla.php';
        } catch (exception $ex) {
            echo 'error - '.$ex->getMessage();
        }
    }
}
?>