<?php
class tituloController
{
    public function mostrartituloC()
    {
        try {
            $obtenerInformacionDetitulo = tituloModel::mostrartituloM();

            echo '  <h2>Titulo:</h2>
                        <h4>' . $obtenerInformacionDetitulo["titulo"] . '</h4>
                        <hr>

                        <h2>Descripción:</h2>
                        <h4>' . $obtenerInformacionDetitulo["descripcion"] . '</h4>
                        <hr>

                        <h2>Estado:</h2>
                        <h4>' . ($obtenerInformacionDetitulo["estado"] == 1 ? 'visible' : 'No visible') . '</h4>
                        <hr>';
        } catch (exception $ex) {
            echo 'error:' . $ex->getMessage();
        }
    }

    public function editartitulo()
    {
        try {
            $obtenerInformacionDetitulo = tituloModel::mostrartituloM();

            echo '<div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Titulo</h2>
                            <input type="text" class="form-control input-lg" name="tituloEdit" id="tituloEdit" value="' . $obtenerInformacionDetitulo["titulo"] . '" required>
                            <input type="hidden" name="idEdit" id="idEdit" value="' . $obtenerInformacionDetitulo["id"] . '" >
                        </div>
                        <div class="form-group">
                            <h2>Descripción:</h2>
                            <textarea class="form-control input-lg" name="descripcionEdit" id="descripcionEdit" cols="30" rows="10" required>' . $obtenerInformacionDetitulo["descripcion"] . '</textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="estadoEdit" name="estadoEdit" ' . ($obtenerInformacionDetitulo["estado"] == 1 ? 'checked' : '') . '>
                            <label class="form-check-label" for="estadoEdit">Estado</label>
                            <small id="tituloContent" class="form-text text-muted">(visible o no visible)</small>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>';
        } catch (exception $ex) {
            echo 'error:' . $ex->getMessage();
        }
    }

    public function actualizartituloC()
    {
        try {
            if (isset($_POST["tituloEdit"]) && isset($_POST["descripcionEdit"])) {

                $infotitulo = ["titulo" => $_POST["tituloEdit"], "descripcion" => $_POST["descripcionEdit"], "estado" => isset($_POST["estadoEdit"])];

                $actualizarInformacion = tituloModel::actualizartituloM($infotitulo);

                if ($actualizarInformacion) {
                    echo '<script>window.location = "titulo"</script>';
                } else {
                    echo 'Revisar informacion del formulario';
                }
            }
        } catch (exception $ex) {
            echo 'error:' . $ex->getMessage();
        }
    }
}
