<?php
    require_once 'Admin/modelo/conexionBD.php';

class seccionclassM extends conexionBD{
    
    public static function verseccionM(){
        try {
            
            $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcionCorta, descripcionLarga, imagen, costo, cantidad, enlace, estado FROM seccioncampaign WHERE estado = 1");

            $pdo->execute();

            return $pdo->fetchAll();

        } catch (Exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
