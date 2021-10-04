<?php
class tituloclassC{
    public function obtenerTituloC(){
        try {
            $obtenerTitulo = tituloclassM::vertituloM();

            foreach ($obtenerTitulo as $key => $value) {
                echo '<div class="navbar navbar-default visible-xs">
                        <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="index" class="navbar-brand">'.$value["titulo"].'</a>
                    </div>

                    <nav class="sidebar">
                        <div class="navbar-collapse" id="navbar-collapse">
                        <div class="site-header hidden-xs">
                            <a class="site-brand" href="index" title="">
                                <img class="img-responsive site-logo" alt="" src="vista/assets/imgTesoros/logoTdd.png">
                                '.$value["titulo"].'
                            </a>
                            <p>'.$value["descripcion"].'</p>
                        </div>';
            }
            
        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }
}
