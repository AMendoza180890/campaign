<?php
    require_once 'conexionBD.php';
class tituloModel extends conexionBD{
    public static function mostrartituloM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcion, estado FROM arttitulo");
            $pdo -> execute();
            return $pdo->fetch();
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }

    public static function actualizartituloM($infotitulo){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE arttitulo SET titulo=:titulo, descripcion=:descripcion, estado=:estado WHERE id = 1");
            $pdo->bindParam(":titulo", $infotitulo["titulo"], PDO::PARAM_STR);
            $pdo->bindParam(":descripcion", $infotitulo["descripcion"], PDO::PARAM_STR);
            $pdo->bindParam(":estado", $infotitulo["estado"], PDO::PARAM_BOOL);
            if($pdo->execute()){
                return true;
            }else {
                return false;
            }
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }
}
