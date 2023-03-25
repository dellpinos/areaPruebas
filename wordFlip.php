<?php
include 'includes/templates/header.php';

?>
    <div class="contenedor contenedor__grid">
        <!-- Area de Pruebas-->
        <main class="contenido wordFlip">
            <h2>WordFlip!</h2>
            <form class="formularioWF">

                <fieldset>
                    <legend>Dame algunas palabras, voy a escoger algunas al azar e invertir el orden de sus letras. Esto
                        hace que las palabras sean ilegibles y completamente inútiles. <br> <br>
                        Cada vez que se presiona el botón, se genera un nuevo resultado.</legend>
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
        <sidebar>
            <div class="entrada__sidebar">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consectetur eveniet quod ad
                    accusantium.</p>
                <a href="#">Este es un enlace</a>
            </div>
            <div class="entrada__sidebar">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consectetur eveniet quod ad
                    accusantium.</p>
                <a href="#">Este es un enlace</a>
            </div>
            <div class="entrada__sidebar">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consectetur eveniet quod ad
                    accusantium.</p>
                <a href="#">Este es un enlace</a>
            </div>

        </sidebar>
    </div>


    <?php
include 'includes/templates/footer.php';
