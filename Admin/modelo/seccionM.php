<?php
require_once "conexionBD.php";
class seccionM extends conexionBD{

    static public function listadeseccionM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcionCorta, descripcionLarga, imagen, costo, cantidad, url, estado FROM seccioncampaign WHERE estado = 1");
            $pdo -> execute();
            return $pdo->fetchAll();

        } catch (exception $ex) {
            echo 'error - '.$ex;
        }
    }

    static public function registrarseccionM($datosNuevoseccion){
        try {

            $pdo = conexionBD::conexion()->prepare("INSERT INTO seccioncampaign(id, titulo, descripcionCorta, descripcionLarga, imagen, costo, cantidad, url, estado) VALUES (:titulo, :descripcionCorta, :descripcionLarga, :imagen, :costo, :cantidad, :url, :estado)");
            
            $pdo -> bindParam("seccion",$datosNuevoseccion["seccion"],PDO::PARAM_STR);
            $pdo -> bindParam("clave",$datosNuevoseccion["clave"],PDO::PARAM_STR);
            $pdo -> bindParam("foto",$datosNuevoseccion["foto"],PDO::PARAM_STR);
            $pdo -> bindParam("rolid",$datosNuevoseccion["rol"],PDO::PARAM_INT);

            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }            
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    static public function editarRegistroseccionM($datosEditarseccion){
        try {
            if ($datosEditarseccion != null) {
                $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcionCorta, descripcionLarga, imagen, costo, cantidad, url, estado FROM seccioncampaign = :id");

                $pdo ->bindParam("id", $datosEditarseccion, PDO::PARAM_INT);

                $pdo ->execute();

                return $pdo->fetch();
            }else{
                $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcionCorta, descripcionLarga, imagen, costo, cantidad, url, estado FROM seccioncampaign = :id");

                $pdo ->bindParam("id", $datosEditarseccion, PDO::PARAM_INT);

                $pdo ->execute();

                return $pdo->fetchAll();
            }

        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    static public function DesactivarRegistroseccionM($codigoseccion){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE seccioncampaign SET estado = 2 WHERE id = :id");
            $pdo -> bindParam("id", $codigoseccion, PDO::PARAM_INT);
            if ($pdo->execute()) {
                return true;
            }else{
                return false;
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public static function actualizarRegistroseccionM($datosActualizarseccion){
        try {
            $pdo = conexionBD::conexion()->prepare("UPDATE seccioncampaign SET titulo=:titulo,descripcionCorta=:descripcionCorta,descripcionLarga=:descripcionLarga,imagen=:imagen,costo=:costo,cantidad=:cantidad,url=:url,estado=:estado WHERE id=:id");

            $pdo -> bindParam("id",$datosActualizarseccion["id"],PDO::PARAM_INT);
            $pdo -> bindParam("titulo",$datosActualizarseccion["titulo"],PDO::PARAM_STR);
            $pdo -> bindParam("descripcionCorta",$datosActualizarseccion["descripcionCorta"],PDO::PARAM_STR);
            $pdo -> bindParam("descripcionLarga",$datosActualizarseccion["descripcionLarga"],PDO::PARAM_STR);
            $pdo -> bindParam("imagen",$datosActualizarseccion["imagen"],PDO::PARAM_STR);
            $pdo->bindParam("costo", $datosActualizarseccion["costo"], PDO::PARAM_STR);
            $pdo->bindParam("cantidad", $datosActualizarseccion["cantidad"], PDO::PARAM_STR);
            $pdo->bindParam("url", $datosActualizarseccion["url"], PDO::PARAM_STR);
            $pdo->bindParam("estado", $datosActualizarseccion["estado"], PDO::PARAM_STR);
            
            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }

            
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
