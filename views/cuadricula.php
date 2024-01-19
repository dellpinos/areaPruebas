<?php
include '../includes/templates/header.php';

?>
    <div class="contenedor contenedor__grid">
        <!-- Area de Pruebas-->
        <main class="contenido wordFlip">
            <h2>Cuadricula</h2>
            <div class="formularioWF">

                <fieldset>
                    <legend>Genero una cuadricula</legend>

                    <div style="display: flex; gap: 3rem;">
                    <div style="width: 100%;">
                        <label >Ancho</label>
                        <input type="text" placeholder="Alto" id="inputAlto">

                    </div>
                    <div style="width: 100%;">
                        <label for="">Altura</label>
                        <input type="text" placeholder="Ancho" id="inputAncho">
                    </div>
                    </div>

                    <div class="boton">
                        <p style="cursor: pointer;" type="submit" id="botonFormulario">Enviar</p>
                    </div>
                    <div class="resultado_cuadricula" style="font-size:40px!important;">
                        Ingresa dos números
                    </div>
                </fieldset>
            </div>
        </main>
        <!-- Fin Area de Pruebas-->

        <?php include '../includes/templates/sidebar.php'; ?>
        
    </div>

 <script src="../build/js/app_cuadricula.js"></script>


    <?php
include '../includes/templates/footer.php';
