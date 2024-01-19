<?php
include '../includes/templates/header.php';

?>
    <div class="contenedor contenedor__grid">
        <!-- Area de Pruebas-->
        <main class="contenido wordFlip">
            <h2>toCamel</h2>
            <form class="formularioWF">

                <fieldset>
                    <legend>Convierto cualquier texto en camelCase. <br><br>
                        Ejemplo: <br>
                        Input: "Este ES-UN_eJempLO de texto"<br> 
                        Output: "esteEsUnEjemploDeTexto"</legend>
                    <div>
                        <input type="text" placeholder="Voy a escribir algo inútil" id="inputWordFlip">
                    </div>
                    <div class="boton">
                        <p style="cursor: pointer;" type="submit" id="botonFormulario">Enviar</p>
                    </div>
                    <div class="contenedorResultado">
                        <p id="resultadoWF"></p>
                    </div>
                </fieldset>
            </form>
        </main>
        <!-- Fin Area de Pruebas-->

        <?php include '../includes/templates/sidebar.php'; ?>
        
    </div>

    <!-- // no puedo conectar el js -->
 <script src="../build/js/app_toCamel.js"></script>


    <?php
include '../includes/templates/footer.php';
