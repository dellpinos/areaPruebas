<?php
include '../includes/templates/header.php';

?>
    <div class="contenedor contenedor__grid">


        <main class="inicio__contenedor">
            <div class="inicio__contenedor-heading">
                <h1 id="inicio-hora">&lt/ Ideas? ></h1>

                <div class="inicio__contenedor-fechas">
                    <p id="inicio-unix"></p>
                    <p id="inicio-fecha"></p>

                </div>
                <p class="inicio__nacimiento">Desde 16/11/87 han pasado <span id="inicio-dias-nacimiento"></span> dias, esto son <span id="inicio-years-nacimiento"></span> años.</p>

            </div>
        </main>


        

<?php include '../includes/templates/sidebar.php'; ?>

    </div>

<?php

include '../includes/templates/footer.php';