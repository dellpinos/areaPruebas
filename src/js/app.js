function main() {
    wordFlip();
}


function wordFlip() {

    const stringIngresado = document.querySelector('#inputWordFlip');
    const botonFormulario = document.querySelector('#botonFormulario');


    botonFormulario.addEventListener('submit', function () {
        stringIngresado = stringIngresado.textContent;
        console.log(stringIngresado);
        invertirPalabra(stringIngresado);
    })


    function invertirPalabra(string) {

        console.log(string);

        let array = string.split(' '); //separa por palabras


        let acu = 0;
        while (acu < array.length) {
            let randomNumber = Math.floor(Math.random() * 100); //random number
            if (randomNumber % 2 === 0) { // palabra elegida
                console.log(array[acu]);
                let arrayDos = array[acu].split('');  // contiene cada letra de la palabra
                let acu2 = 0;
                let valorUno = [];

                while (acu2 <= arrayDos.length) {
                    valorUno[acu2] = arrayDos[arrayDos.length - acu2];
                    acu2++;
                }
                array[acu] = valorUno.join('');
            }
            acu++;

        }

        console.log(array.join(' '));
    }



}

main();