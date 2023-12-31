

function rgb(r, g, b) {
    // complete this function  
    let numero = r;
    let numero2 = g;
    let numero3 = b;
    if (numero == 0 || numero < 0) {
        numero = '00';
    } else if (numero > 255) {
        numero = 'ff';
    } else {
        numero = r.toString(16);
        if (numero.length == 1) {
            numero = '0' + numero;
        }
    }

    if (numero2 == 0 || numero2 < 0) {
        numero2 = '00';
    } else if (numero2 > 255) {
        numero2 = 'ff';
    } else {
        numero2 = g.toString(16);
        if (numero2.length == 1) {
            numero2 = '0' + numero2;
        }
    }

    if (numero3 == 0 || numero3 < 0) {
        numero3 = '00';
    } else if (numero3 > 255) {
        numero3 = 'ff';
    } else {
        numero3 = b.toString(16);
        if (numero3.length == 1) {
            numero3 = '0' + numero3;
        }
    }

    let resultado = numero + numero2 + numero3;
    return resultado.toUpperCase()
}

