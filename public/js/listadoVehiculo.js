import { ruta } from "./variables.js";

function revelarPreviewVehiculos(){
    $(".contenedorAccesoAListas").css("background-image", "url(/img/BGVehiculos.png)");
    $("#botonModelos").css("opacity", "50%");
}

function revelarPreviewModelos(){
    $(".contenedorAccesoAListas").css("background-image", "url(/img/BGModelos.png)");
    $("#botonVehiculo").css("opacity", "50%");
}

function restaurarBody(){
    $(".contenedorAccesoAListas").css("background-image", "url(/img/BGContenido.png)");
    $("#botonModelos").css("opacity", "100%");
    $("#botonVehiculo").css("opacity", "100%");
}

$("#botonModelos").mouseover(function() {
    revelarPreviewModelos();
});

$("#botonModelos").mouseout(function() {
    restaurarBody();
});

$("#botonVehiculo").mouseover("mouseover", function() {
    revelarPreviewVehiculos();
});

$("#botonVehiculo").mouseout(function() {
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
        const arrayDeIdioma = idioma[13]
        const arrayDeTextos = data[1];
        const arrayDeTextos2 = arrayDeTextos[13]

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