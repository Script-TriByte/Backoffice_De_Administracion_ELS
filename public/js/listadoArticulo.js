import { ruta } from "./variables.js";

function revelarPreviewArticulo(){
    $(".contenedorAccesoAListas").css("background-image", "url(/img/BGArticuloListado.png)");
    $("#botonTipoArticulo").css("opacity", "50%");
}

function revelarPreviewTipoArticulo(){
    $(".contenedorAccesoAListas").css("background-image", "url(/img/BGTipoArticulo.png)");
    $("#botonArticulo").css("opacity", "50%");
}

function restaurarBody(){
    $(".contenedorAccesoAListas").css("background-image", "url(/img/BGArticulo.png)");
    $("#botonTipoArticulo").css("opacity", "100%");
    $("#botonArticulo").css("opacity", "100%");
}

$("#botonArticulo").mouseover(function() {
    revelarPreviewArticulo();
});

$("#botonArticulo").mouseout(function() {
    restaurarBody();
});

$("#botonTipoArticulo").mouseover("mouseover", function() {
    revelarPreviewTipoArticulo();
});

$("#botonTipoArticulo").mouseout(function() {
    restaurarBody();
});

function aplicarIngles() {
    document.cookie = "lang=en;path=/"
    location.reload()
  }
  
  function aplicarEspanol(){
    document.cookie = "lang=es;path=/"
    location.reload()
  }

$('#idiomaDelSistema').click(function(){
    if(document.cookie.indexOf("lang=en") !== -1){
        aplicarEspanol()
    } else {
        aplicarIngles()
    }
});

$(document).ready(function () {
    if(document.cookie.indexOf("lang=en") !== -1){
        $('#idiomaDelSistema').css('background-image', 'url(/img/banderaUK.png)')
    } else {
        $('#idiomaDelSistema').css('background-image', 'url(/img/banderaUruguay.png)')
    }
    Promise.all([fetch('/' + ruta), fetch('/json/elementos.json')])
    .then((responses) => Promise.all(responses.map((response) => response.json())))
    .then((data) => {
        const idioma = data[0];
        const arrayDeIdioma = idioma[12]
        const arrayDeTextos = data[1];
        const arrayDeTextos2 = arrayDeTextos[12]

        for (let posicion = 0; posicion < Object.keys(arrayDeTextos2).length; posicion++){
            let texto = document.getElementById(arrayDeTextos2[posicion])
            console.log(texto)
            if (texto.nodeName == "INPUT"){
                texto.placeholder = arrayDeIdioma[posicion]
            } else {
                texto.textContent = arrayDeIdioma[posicion]
            }
        }
    })

});