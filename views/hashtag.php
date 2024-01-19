<?php
include '../includes/templates/header.php';

?>
    <div class="contenedor contenedor__grid">
        <!-- Area de Pruebas-->
        <main class="contenido wordFlip">
            <h2>#Hashtag</h2>
            <div class="formularioWF">

                <fieldset>
                    <legend>Convierto frases en hashtags, el resultado no puede superar los 140 caracteres <br><br>
                        Ejemplo: <br>
                        Input: "tenemos Un Problema"<br> 
                        Output: "#TenemosUnProblema"</legend>
                    <div>
                        <input type="text" placeholder="Color RGB" id="inputHashtag">
                    </div>
                    <div class="boton">
                        <p style="cursor: pointer;" type="submit" id="botonFormulario">Enviar</p>
                    </div>
                    <div class="contenedorResultado">
                        <p id="resultadoHashtag"></p>
                    </div>
                </fieldset>
            </div>
        </main>
        <!-- Fin Area de Pruebas-->

        <?php include '../includes/templates/sidebar.php'; ?>
        
    </div>

 <script src="../build/js/app_hashtag.js"></script>


    <?php
include '../includes/templates/footer.php';
