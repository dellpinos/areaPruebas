main();const cuadricula=(e,t,o)=>{for(let n=0;n<e;n++){let e="";if(n%2!=0)for(let o=0;o<t;o++)e+=o%2==0?"#":"@";else for(let o=0;o<t;o++)e+=o%2!=0?"#":"@";const c=document.createElement("P");c.textContent=e,o.appendChild(c)}};function main(){const e=document.querySelector("#botonFormulario"),t=(document.querySelector("#mensajeError"),document.querySelector("#inputAlto")),o=document.querySelector("#inputAncho"),n=document.querySelector(".resultado_cuadricula");e.addEventListener("click",(function(){t.value>500||o.value>100?n.textContent="El máximo es 500 de alto y 100 de ancho":(n.textContent="",cuadricula(t.value,o.value,n))}))}
//# sourceMappingURL=app_cuadricula.js.map
