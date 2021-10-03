<?php

class seccionC {
    public function listadeseccion(){
        try {
            $listaseccion = seccionM::listadeseccionM();
            if($listaseccion != 0){
                foreach ($listaseccion as $key => $value) {
                    echo '<tr>
                    <td>'.($key +1).'</td>
                    <td>'.$value["titulo"].'</td>
                    <td>'.$value["descripcionCorta"].'</td>
                    <td>'.$value["cantidad"].'</td>
                    <td>'.$value["estado"].'</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-success EditRegistroseccion" codValor='.$value["id"]. '><i data-toggle="modal" data-target="#editarseccion" class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger DesactivarRegistroseccion" codValor=' . $value["id"] . '><i class="fa fa-times"></i></button>
                        </div>
                    </td>
                </tr>';
                }
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public function registrarseccionC(){
        try {
                if(isset($_POST["titulo"])){
                    // codigo de validacion de imagen
                    $rutaImagenProcesada = tratamientoImagen::tratamientoTipoImagen($_FILES["foto"]["tmp_name"], $_FILES["foto"]);
 
                    $datosNuevoseccion = array("titulo"=>$_POST["titulo"], "descripcionCorta"=>$_POST["descripcionCorta"], "descripLarga" => $_POST["descripLarga"], "urlActual" => $_POST["urlActual"], "cantidad" => $_POST["cantidad"], "costo" => $_POST["costo"], "estado"=>$_POST["estado"],"foto"=>$rutaImagenProcesada);

                    $crearNuevoseccion = seccionM::registrarseccionM($datosNuevoseccion);

                    if ($crearNuevoseccion == true) {
                            echo '<script>window.location="catseccion"</script>';
                    }else{
                            echo 'Error - Ocurrio un error al hora de insertar';
                    }
                }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    // esta funcion es para obtener informacion del seccion usuando jquery y ajax
    public static function editarRegistroseccionC($valor){
        try {      
            $editarseccion = seccionM::editarRegistroseccionM($valor);
            return $editarseccion;
        } catch (Exception $ex) {
            echo 'Error -'.$ex;
        }
    }

    public function actualizarRegistroseccionC(){
        try {
            if (isset($_POST["idEdit"])) {

                $rutaImagen = $_POST["fotoActual"];
                if ($_FILES["fotoEdit"]["tmp_name"] != "") {
                    $rutaImagen = tratamientoImagen::tratamientoTipoImagen($_FILES["fotoEdit"]["tmp_name"], $_FILES["fotoEdit"]);
                }
                $datosActualizarseccion = array(
                    "id"=>$_POST["idEdit"],
                    "titulo"=>$_POST["tituloEdit"], 
                    "descripCortaEdit"=>$_POST["descripCortaEdit"], 
                    "descripLargaEdit" => $_POST["descripLargaEdit"], 
                    "estadoEdit" => $_POST["estadoEdit"], 
                    "urlEdit"=>$_POST["urlEdit"], 
                    "cantidadEdit" => $_POST["cantidadEdit"], 
                    "costoEdit" => $_POST["costoEdit"], 
                    "foto"=>$rutaImagen);

                $datosActualizados = seccionM::actualizarRegistroseccionM($datosActualizarseccion);

                if($datosActualizados == true){
                    echo '<script>window.location = "catseccion"</script>';
                }else{
                    echo 'Hay un error no se pudo realizar actualizacion';
                }
            }
        } catch (exception $ex) {
            echo 'Error - '.$ex;
        }
    }

    public function DesactivarseccionC(){
        try {
            if (isset($_GET["CodValor"])){
                $codigoseccion = $_GET["CodValor"];
                $Respuestadesactivarseccion = seccionM::DesactivarRegistroseccionM($codigoseccion);
                 if ($Respuestadesactivarseccion == true) {
                     echo '<script>window.location="catseccion"</script>';
                 }else{
                     echo 'Hubo un error, favor reportarlo al administrador del sistema';
                 }
            }
        } catch (Exception $ex) {
            echo 'Error - '.$ex;
        }
    }
}
