<?php
    require_once 'Admin/modelo/conexionBD.php';

class tituloclassM extends conexionBD{
    
    public static function vertituloM(){
        try {
            
            $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcion FROM encabezadocampaign");

            $pdo->execute();

            return $pdo->fetchAll();
        } catch (Exception $ex) {
            echo 'Error -'.$ex;
        }
    }
}
