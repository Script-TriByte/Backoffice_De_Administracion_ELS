<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Script TriByte">
    <link rel="stylesheet" href="/css/headerStyle.css">
    <link rel="stylesheet" href="/css/clasesGlobales.css">
    <link rel="stylesheet" href="/css/appBackOffice.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="/img/iconoPestana.png">
    <title>E.L.S - Backoffice</title>
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
  <div class="contenedorAccesoAListas">
        <a href="/usuarios" class="botonListado">
          <div class="cambioCursor textoClaro" id="botonListaUsuarios">
            <label class="cambioCursor" id="labelAOrdenar"><b>Lista de Usuarios</b></label>
            <img class="iconoBotonListado" id="iconoListadoUsuarios" src="/img/iconoUsuarios.png">
          </div>
        </a>
        <a href="/almacenes" class="botonListado">
          <div class="cambioCursor textoClaro" id="botonListaAlmacenes">
            <label class="cambioCursor" id="labelAOrdenar"><b>Lista de Almacenes</b></label>
            <img class="iconoBotonListado" id="iconoListadoPaquetes" src="/img/iconoAlmacenes.png">
          </div>
        </a>
        <a href="/vehiculos" class="botonListado">
          <div class="cambioCursor textoClaro" id="botonListaVehiculos">
            <label class="cambioCursor" id="labelAOrdenar"><b>Lista de Vehículos</b></label>
            <img class="iconoBotonListado" id="iconoListadoLotes" src="/img/iconoVehiculo.png">
          </div>
        </a>
    </div>
    <footer class="footerBackOffice textoClaro absoluto">
      <div id="contenedorUbicacionBackOffice">
        <img id="imagenUbicacionBackOffice" src="/img/iconoSeguimiento.png">
        BackOffice
      </div>
    </footer>
    <script src="/js/aplicacionBackOffice.js"></script>

  {{-- <label><a href="/usuarios">Usuarios del Sistema</a></label>
    <br><br>
    <label><a href="/almacenes">Almacenes de 'Quick Carry'</a></label>
    <br><br>
    <label><a href="/vehiculos">Lista de Vehiculos</a></label>
    <br><br>
    <label><a href="/modelos">Lista de Modelos</a></label>
    <br><br>
    <label><a href="/articulos">Lista de Articulos</a></label>
    <br><br>
    <label><a href="/turnos">Lista de Turnos</a></label>
    <br><br>
    <label><a href="/tipoArticulo">Tipos de Articulo</a></label> --}}
</body>
</html>