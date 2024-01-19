<?php
include '../includes/templates/header.php';

?>
    <div class="contenedor contenedor__grid">
        <!-- Area de Pruebas-->
        <main class="contenido wordFlip">
            <h2>Hexa</h2>
            <div class="formularioWF">

                <fieldset>
                    <legend>Convierto colores RGB en Hexadecimal. Los números deben estar separados por una coma. <br><br>
                        Ejemplo: <br>
                        Input: "255,10,111<br> 
                        Output: "FF0A6F"</legend>
                    <div>
                        <input type="text" placeholder="Color RGB" id="inputHexa">
                    </div>
                    <div class="boton">
                        <p style="cursor: pointer;" type="submit" id="botonFormulario">Enviar</p>
                    </div>
                    <div class="contenedorResultado">
                        <p id="resultadoHexa"></p>
                    </div>
                </fieldset>
            </div>
        </main>
        <!-- Fin Area de Pruebas-->

        <?php include '../includes/templates/sidebar.php'; ?>
        
    </div>

 <script src="../build/js/app_hexa.js"></script>


    <?php
include '../includes/templates/footer.php';
