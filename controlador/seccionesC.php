<?php
class seccionclassC{
    public function obtenerSeccionC(){
        try {
            $obtenerSecciones = seccionclassM::verseccionM();

            foreach ($obtenerSecciones as $key => $value) {
                echo '<div class="grid-item">
                            <img class="img-responsive" alt="" src="Admin/'.$value["imagen"].'">
                            <a href="'.$value["enlace"]. '" target="_blank" class="project-description">
                                <div class="project-text-holder">
                                    <div class="project-text-inner">
                                        <h2 id="forms-control-disabled">' . $value["titulo"] . '</h2>
                                        <hr>
                                        <p class="h3" style="color:#000000; background:rgba(255,255,255,0.5); font-weight: bold;">'.$value["descripcionCorta"]. '</p>
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

<!--ESTRUCTURA DE SECCIONES-->
<!-- '<div class="grid-item">
        <img class="img-responsive" alt="" src="Admin/'.$value["imagen"].'">
            <a href="'.$value["enlace"]. '" target="_blank" class="project-description">
                <div class="project-text-holder">
                    <div class="project-text-inner">
                        <h3>' . $value["titulo"] . '</h3>
                            <p class="lh-sm"  style="color:#000000; background:rgba(255,255,255,0.5); font-weight: bold;">'.$value["descripcionCorta"]. '</p>
                                <h3>'.($value["cantidad"]!="" || $value["cantidad"] ? $value["cantidad"] : "").'</h3>
                                <h3>'.($value["costo"] != "" || $value["costo"] ? $value["costo"] : "").'</h3>
                            </div>
                        </div>
                    </a>
                </div>'; -->