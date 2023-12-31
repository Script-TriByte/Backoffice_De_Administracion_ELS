import { ruta } from "./variables.js";

$("#crearVehiculo").click(function() {
    $("#ajusteBrillo").show();
    $("#contenedorCrear").show();
});

$("#cerrarContenedorCrear").click(function() {
    $("#ajusteBrillo").hide();
    $("#contenedorCrear").hide();
});

$("#botonBuscar").click(function(){
    $("#formularioBuscarVehiculos").attr("action", "/vehiculos/buscar");
});

$("#botonCrearVehiculos").click(function(){
    $("#formularioCrearVehiculos").attr("action", "/vehiculos/crear");
});

$("#imagenBotonEditar").click(function() {
    $("#ajusteBrillo").show();
    $(".vehiculoAModificar").show();
    $("#formularioModificarVehiculos").attr("action", "api/v2/vehiculos/" +  valorInput);
});

$("#cerrarContenedorModificar").click(function() {
    $("#ajusteBrillo").hide();
    $(".vehiculoAModificar").hide();
});

$("#imagenBotonEliminar").click(function() {
    $("#ajusteBrillo").show();
    $(".vehiculoAEliminar").show();
    $("#formularioEliminarVehiculos").attr("action", "api/v2/vehiculos/" +  valorInput);
});

$("#cerrarContenedorEliminar").click(function() {
    $("#ajusteBrillo").hide();
    $(".vehiculoAEliminar").hide();
});

$("#imagenBotonAsignar").click(function() {
    $("#ajusteBrillo").show();
    $(".asignarChofer").show();
    $("#formularioAsignarChofer").attr("action", "api/v2/asignarVehiculo/" +  valorInput);
});

$("#cerrarContenedorAsignar").click(function() {
    $("#ajusteBrillo").hide();
    $(".asignarChofer").hide();
});

$("#imagenBotonRelegar").click(function() {
    $("#ajusteBrillo").show();
    $(".relegarChofer").show();
    $("#formularioRelegarChofer").attr("action", "api/v2/relegarVehiculo/" +  valorInput);
});

$("#cerrarContenedorRelegar").click(function() {
    $("#ajusteBrillo").hide();
    $(".relegarChofer").hide();
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
        const arrayDeIdioma = idioma[18]
        const arrayDeTextos = data[1];
        const arrayDeTextos2 = arrayDeTextos[18]

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


/*const formularioModificarVehiculos = document.getElementById("formularioModificarVehiculos");
const botonFormularioModificarVehiculos = document.getElementById("botonFormularioModificarVehiculos");

const formularioEliminarVehiculos = document.getElementById("formularioEliminarVehiculos");
const botonFormularioEliminarVehiculos = document.getElementById("botonFormularioEliminarVehiculos");

const formularioAsignarChofer = document.getElementById("formularioAsignarChofer");
const botonAsignarChofer = document.getElementById("botonAsignarChofer");

const formularioRelegarChofer = document.getElementById("formularioRelegarChofer");
const botonRelegarChofer = document.getElementById("botonRelegarChofer");

botonFormularioModificarVehiculos.addEventListener("click", function()
{
    let inputMatricula = document.getElementById("inputMatriculaModificar");
    let valorInput = inputMatricula.value;
    formularioModificarVehiculos.setAttribute("action", "api/v2/vehiculos/" +  valorInput);
});

botonFormularioEliminarVehiculos.addEventListener("click", function()
{
    let inputMatricula = document.getElementById("inputMatriculaEliminar");
    let valorInput = inputMatricula.value;
    formularioEliminarVehiculos.setAttribute("action", "api/v2/vehiculos/" +  valorInput);
});


botonAsignarChofer.addEventListener("click", function()
{
    let inputCIAsignar = document.getElementById("inputCIAsignar");
    let valorInput = inputCIAsignar.value;
    formularioAsignarChofer.setAttribute("action", "api/v2/asignarVehiculo/" +  valorInput);
});

botonRelegarChofer.addEventListener("click", function()
{
    let inputCIRelegar = document.getElementById("inputCIRelegar");
    let valorInput = inputCIRelegar.value;
    formularioRelegarChofer.setAttribute("action", "api/v2/relegarVehiculo/" +  valorInput);
});*/