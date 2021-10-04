<?php
class seccionclassC{
    public function obtenerSeccionC(){
        try {
            $obtenerSecciones = seccionclassM::verseccionM();

            foreach ($obtenerSecciones as $key => $value) {
                echo '<div class="grid-item">
                            <img class="img-responsive" alt="" src="Admin/'.$value["imagen"].'">
                            <a href="'.$value["enlace"].'" target="_blank" class="project-description">
                                <div class="project-text-holder">
                                <div class="project-text-inner">
                                    <h3>'.$value["descripcionCorta"]. '</h3>
                                    <h3>We need '.$value["cantidad"].'</h3>
                                    <h3>Each coast $'.$value["costo"].'</h3>
                                </div>
                                </div>
                            </a>
                        </div>';
                }

        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }
}
?>