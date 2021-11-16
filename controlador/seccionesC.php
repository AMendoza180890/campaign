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
                                        <h3>' . $value["titulo"] . '</h3>
                                        <p style = "color:black; font-weight: bolder; background:rgb(255,255,255,0.5);">'.$value["descripcionCorta"]. '</p>';
                                        echo (($value["cantidad"] != null || $value["cantidad"] != 0) ?'<h3>We need '.$value["cantidad"].'</h3>':"");
                                        echo (($value["costo"] != null || $value["costo"]!= 0) ?'<h3>Each coast $'.$value["costo"].'</h3>':"");
                                    echo '</div>
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