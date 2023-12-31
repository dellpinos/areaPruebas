<?php

require  __DIR__ . '/includes/app.php';

use johnnymast\Morsecode\Morsecode;

$morse = new Morsecode();


// $morse->encode('This is a test') . "Hola perola";

// $resultado = decode_morse("- .... .. ... / .. ... / .- / - . ... -", $morse);

// $resultado = $morse->encode("Hola como estas");


echo "<pre>";
    var_dump($resultado);
echo "</pre>";

function decode_morse(string $code, $morse) : string
{
    // Replace with your code

    $patron = '/.+?\s?[.\-_]+[\s]{3}/'; //todo lo que puede estar detras de 3 espacios en blanco
    $patron2 = '/\s?[.\-_]+\s?/'; // Busca puntos y guines, puede tener un espacio al principio o al final (palabras)
    preg_match($patron, $code, $arrayPalabras); // patron, string, array resultante
    $palabraLegible = '';

    foreach ($arrayPalabras as $palabra) {
        preg_match_all($patron2, $palabra, $arrayLetras);
        $letraLegible = '';
        foreach ($arrayLetras as $letra) {
            
           $letraLegible = $morse->decode($letra);  /// ????????
        }
        
       $palabraLegible += " " + $letraLegible;
    }

    return $palabraLegible;

}


// Un espacio es una letra de la palabra
// tres espacios es otra palabra