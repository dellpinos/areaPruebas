main();const hashtag=e=>{const t=/\s/g;if(!e.replace(t,"").length>0)return console.log("vacio"),!1;let o=e.split(" ");o=o.map(e=>{if(!e.length<1)return(e=e.split(""))[0]=e[0].toUpperCase(),e.join("")});let n=o.join("");return n=n.replace(t,""),n=n.split(""),n[0]=n[0].toUpperCase(),n="#"+n.join(""),n.length>140?(console.log("Demasiado Largo"),!1):n};function main(){const e=document.querySelector("#botonFormulario"),t=document.querySelector("#inputHashtag"),o=document.querySelector("#resultadoHashtag");e.addEventListener("click",(function(){const e=t.value,n=hashtag(e);o.textContent=n}))}
//# sourceMappingURL=app_hashtag.js.map
