<?php
require_once "conexionBD.php";
class seccionM extends conexionBD{

    static public function listadeseccionM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT id, titulo, descripcionCorta, descripcionLarga, imagen, costo, cantidad, enlace, estado FROM seccioncampaign WHERE estado = 1");
            $pdo -> execute();
            return $pdo->fetchAll();

        } catch (exception $ex) {
            echo 'error - '.$ex;
        }
    }

    static public function registrarseccionM($datosNuevoseccion){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO seccioncampaign (titulo, descripcionCorta, descripcionLarga, imagen, costo, cantidad,enlace, estado) VALUES (:titulo, :descripcionCorta, :descripcionLarga, :imagen, :costo, :cantidad, :enlace, :estado)");
            
            $pdo -> bindParam("titulo",$datosNuevoseccion["titulo"],PDO::PARAM_STR);
            $pdo -> bindParam("descripcionCorta",$datosNuevoseccion["descripcionCorta"],PDO::PARAM_STR);
            $pdo -> bindParam("descripcionLarga", $datosNuevoseccion["descripLarga"], PDO::PARAM_STR);
            $pdo -> bindParam("imagen",$datosNuevoseccion["foto"],PDO::PARAM_STR);
            $pdo -> bindParam("costo",$datosNuevoseccion["costo"],PDO::PARAM_STR);
            $pdo -> bindParam("cantidad", $datosNuevoseccion["cantidad"], PDO::PARAM_STR);
            $pdo -> bindParam("enlace", $datosNuevoseccion["urlActual"], PDO::PARAM_STR);
            $pdo -> bindParam("estado", $datosNuevoseccion["estado"], PDO::PARAM_INT);

            var_dump($datosNuevoseccion);

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
                $pdo = conexionBD::conexion()->prepare("SELECT seccioncampaign.id, seccioncampaign.titulo, seccioncampaign.descripcionCorta, seccioncampaign.descripcionLarga, seccioncampaign.imagen, seccioncampaign.costo, seccioncampaign.cantidad, seccioncampaign.enlace, estado.id AS estadoid, estado.descripcion FROM seccioncampaign INNER JOIN estado ON seccioncampaign.estado = estado.id WHERE seccioncampaign.id = :id");

                $pdo ->bindParam("id", $datosEditarseccion, PDO::PARAM_INT);

                $pdo ->execute();

                return $pdo->fetch();
            }else{
                $pdo = conexionBD::conexion()->prepare("SELECT seccioncampaign.id, seccioncampaign.titulo, seccioncampaign.descripcionCorta, seccioncampaign.descripcionLarga, seccioncampaign.imagen, seccioncampaign.costo, seccioncampaign.cantidad, seccioncampaign.enlace, estado.id AS estadoid, estado.descripcion FROM seccioncampaign INNER JOIN estado ON seccioncampaign.estado = estado.id WHERE seccioncampaign.id = :id");

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
            $pdo = conexionBD::conexion()->prepare("UPDATE seccioncampaign SET titulo=:titulo,descripcionCorta=:descripcionCorta,descripcionLarga=:descripcionLarga,imagen=:imagen,costo=:costo,cantidad=:cantidad,enlace=:enlace,estado=:estado WHERE id=:id");

            $pdo -> bindParam("id",$datosActualizarseccion["id"],PDO::PARAM_INT);
            $pdo -> bindParam("titulo",$datosActualizarseccion["titulo"],PDO::PARAM_STR);
            $pdo -> bindParam("descripcionCorta",$datosActualizarseccion["descripCortaEdit"],PDO::PARAM_STR);
            $pdo -> bindParam("descripcionLarga",$datosActualizarseccion["descripLargaEdit"],PDO::PARAM_STR);
            $pdo -> bindParam("imagen",$datosActualizarseccion["foto"],PDO::PARAM_STR);
            $pdo->bindParam("costo", $datosActualizarseccion["costoEdit"], PDO::PARAM_STR);
            $pdo->bindParam("cantidad", $datosActualizarseccion["cantidadEdit"], PDO::PARAM_STR);
            $pdo->bindParam("enlace", $datosActualizarseccion["urlEdit"], PDO::PARAM_STR);
            $pdo->bindParam("estado", $datosActualizarseccion["estadoEdit"], PDO::PARAM_STR);
            
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
