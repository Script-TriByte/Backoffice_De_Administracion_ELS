<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Script TriByte">
    <link rel="stylesheet" href="/css/headerStyle.css">
    <link rel="stylesheet" href="/css/clasesGlobales.css">
    <link rel="stylesheet" href="/css/vehiculos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="/img/iconoPestana.png">
    <title>E.L.S - Vehiculos</title>
</head>
<body>
    <header class="textoClaro">
    <a href="/"><img class="logo" src="/img/Logo del Sistema.png"></a>
    <nav>
      <ul class="menu">
        <li class="cambioCursor"><a href="/">HOME</a></li>
        <li><a href="/html/opcionesHeader/acercaDe.html">ACERCA DE</a></li>
        <li class="cambioCursor"><a href="/html/opcionesHeader/contacto.html">CONTACTO</a></li>
        <li><div class="boton textoClaro cambioCursor divEnHeader" id="idiomaDelSistema"></div></li>
        <li><div class="boton textoClaro cambioCursor divEnHeader" id="aparienciaDelSistema"></div></li>
        <li>
          <div id="contenedorUsuario">
            <img class="usuario" id="iconoUsuario" src="/img/iconoUsuario.png">
            <button class="boton textoClaro">NOMBRE DEL USUARIO</button>
            <ul class="submenu">
              <li><img class="salir" id="iconoSalida" src="/img/iconoSalir.png">
                <a href="/html/login.html">CERRAR SESIÓN</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </header>

  <div class="contenedorVehiculos roboto textoClaro">
        <div class="opcionesVehiculo">
            <img src="/img/iconoAgregar.png" class="cambioCursor" id="crearVehiculo">
            <label class="textoClaro"><b>|</b></label>
            <form action="api/v1/vehiculos/buscar" id="formularioBuscarVehiculos" method="post">
                <input class="roboto textoClaro" id="barraDeBusqueda" name="barraDeBusqueda" placeholder="Buscar Vehículo">
                <div class="roboto textoClaro" id="contenedorFiltroDeBusqueda">
                    <label><b>Filtro de Búsqueda:</b></label>
                    <select class="roboto textoClaro" id="filtroDeLista" name="filtroDeLista">
                        <option value="matricula"><b>Matrícula</b></option>
                        <option value="capacidad"><b>Capacidad</b></option>
                        <option value="pesoMaximo"><b>Peso Máximo</b></option>
                        <option value="modelo"><b>Modelo</b></option>
                    <select>
                </div>
                <button type="submit" id="botonBuscar">
                    <img class="cambioCursor" id="imagenBotonBuscar" src="/img/iconoLupa.png">
                </button>
            </form>
        </div>
        <hr>
    </div>
    
    <div class="contenedorCrearVehiculos roboto textoClaro" id="contenedorCrear">
    <img class="cambioCursor" id="cerrarContenedorCrear" src="/img/iconoCerrar.png">
        <form action='api/v2/vehiculos' method='post' id="formularioCrearVehiculos">
            @csrf
            <br>
            <label>ID Modelo: </label>
            <input class="inputCrearVehiculo textoClaro roboto" type="number" name="modelo" required>
            <br><br>
            <label>Matrícula: </label>
            <input class="inputCrearVehiculo textoClaro roboto" type="text" name="matricula" required>
            <br><br>
            <label>Capacidad: </label>
            <input class="inputCrearVehiculo textoClaro roboto" type="number" name="capacidad" required>
            <br><br>
            <label>Peso Máximo (KG): </label>
            <input class="inputCrearVehiculo textoClaro roboto" type="number" name="pesoMaximo" required>
            <br><br>
            <button class="botonCrearVehiculo roboto textoClaro cambioCursor" type="submit">Crear</button>
        </form>
    </div>

    <div class="contenedor">
    <img src="/img/iconoEditar.png" class="cambioCursor" id="imagenBotonEditar" title="Editar Almacén">
    <img src="/img/iconoEliminar.png" class="cambioCursor" id="imagenBotonEliminar" title="Eliminar Almacén">
    </div>

  <div class="VehiculoAModificar roboto textoClaro" id="contenedorModificar">
  <img class="cambioCursor" id="cerrarContenedorModificar" src="/img/iconoCerrar.png">
        <form id="formularioModificarVehiculos" action='api/v2/vehiculos' method='post'>
            @method('PUT')
            @csrf
            <br>
            <label>Matrícula: </label>
            <input class="inputModificarVehiculo textoClaro roboto" id="inputMatriculaModificar" type="text" name="matricula" required>
            <br><br>
            <label>Capacidad: </label>
            <input class="inputModificarVehiculo textoClaro roboto" type="number" name="capacidad" required>
            <br><br>
            <label>Peso Máximo</label>
            <input class="inputModificarVehiculo textoClaro roboto" type="number" name="pesoMaximo" required>
            <br><br>
            <button class="botonModificarVehiculo roboto textoClaro cambioCursor" id="botonFormularioModificarVehiculos" type="submit">Modificar</button>
        </form>
    </div>
    <br><br>
    {{--<div class="VehiculoEliminar">
        <h3>Eliminar Vehiculo:</h3>
        <form id="formularioEliminarVehiculos" action='api/v2/vehiculos' method='post'>
            @method('DELETE')
            @csrf
            <label>Matrícula: </label>
            <input id="inputMatriculaEliminar" type="text" name="matricula" required>
            <br><br>
            <button id="botonFormularioEliminarVehiculos" type="submit">Eliminar</button>
        </form>
    </div>
    <br><br>
    <div id="contenedorAsignarChofer">
        <h3>Asignar Chofer:</h3>
        <form id="formularioAsignarChofer" action="api/v2/asignarVehiculo" method="POST">
            @method('PUT')
            @csrf
            <label>CI del Chofer: </label>
            <input id="inputCIAsignar" type="number" name="documentoDeIdentidad" required>
            <br><br>
            <label>Matricula del Vehiculo: </label>
            <input type="text" name="matricula" required>
            <br><br>
            <button id="botonAsignarChofer" type="submit">Asignar Chofer</button>
        </form>
    </div>
    <div id="contenedorRelegarChofer">
        <h3>Relegar Chofer:</h3>
        <form id="formularioRelegarChofer" action="api/v2/relegarVehiculo" method="POST">
            @method('DELETE')
            @csrf
            <label>CI del Chofer: </label>
            <input id="inputCIRelegar" type="number" name="documentoDeIdentidad" required>
            <br><br>
            <button id="botonRelegarChofer" type="submit">Relegar Chofer</button>
        </form>
    </div>--}}
    <script src="../js/vehiculos.js"></script>
</body>
</html>