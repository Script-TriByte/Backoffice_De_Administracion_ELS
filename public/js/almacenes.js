$("#crearAlmacen").click(function() {
    $("#ajusteBrillo").show();
    $("#contenedorCrear").show();
});

$("#cerrarContenedorCrear").click(function() {
    $("#ajusteBrillo").hide();
    $("#contenedorCrear").hide();
});

$("#botonBuscar").click(function(){
    $("#formularioBuscarAlmacenes").attr("action", "/almacenes/buscar");
})

$("#botonCrearAlmacenes").click(function(){
    $("#formularioCrearAlmacenes").attr("action", "/almacenes/crear");
})

$("#imagenBotonEditar").click(function() {
    $("#ajusteBrillo").show();
    $(".AlmacenAModificar").show();
});

$("#cerrarContenedorModificar").click(function() {
    $("#ajusteBrillo").hide();
    $(".AlmacenAModificar").hide();
});

/*const formularioModificarAlmacenes = document.getElementById("formularioModificarAlmacenes");
const botonFormularioModificarAlmacenes= document.getElementById("botonFormularioModificarAlmacenes");

const formularioEliminarAlmacenes = document.getElementById("formularioEliminarAlmacenes");
const botonFormularioEliminarAlmacenes = document.getElementById("botonFormularioEliminarAlmacenes");

botonFormularioModificarAlmacenes.addEventListener("click", function()
{
    let inputIDAlmacen = document.getElementById("inputIDAlmacenModificar");
    let valorInput = inputIDAlmacen.value;
    formularioModificarAlmacenes.setAttribute("action", "api/v2/almacenes/" +  valorInput);
});

botonFormularioEliminarAlmacenes.addEventListener("click", function()
{
    let inputIDAlmacen = document.getElementById("inputIDAlmacenEliminar");
    let valorInput = inputIDAlmacen.value;
    formularioEliminarAlmacenes.setAttribute("action", "api/v2/almacenes/" +  valorInput);
});*/