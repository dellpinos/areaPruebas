function solution(str){

    let array = str.split('');
    let array2 = [];
    let indice = array.length;
    let indice2 = 0;

    for(let i=0; i <= indice; i += 2) {
      if(array[i] === undefined){
        array[i] = '_';
      };
      if(array[i+1] === undefined){
        array[i+1] = '_';
      };
    }

    for(let i=0; i < indice; i += 2) {
       array2[indice2] = array[i] + array[i+1];
       indice2++;
    }
    return array2;
}
let respuesta = solution('sdasdas');
console.log(respuesta);




// let variable = 'sdaafs';
// let respuesta = variable.split('');




console.log('probando');

