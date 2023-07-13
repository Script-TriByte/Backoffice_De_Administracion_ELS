<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Administrador;
use App\Models\Gerente;
use App\Models\Cargador;
use App\Models\Chofer;

class UsuarioController extends Controller

{

    public function CrearUsuario($request){
        Usuario::create([
            "docDeIdentidad" => $request -> input("documentoDeIdentidad"),
            "contrasenia" => $request -> input("contrasenia"),
            "nombre" => $request -> input("nombre"),
            "apellido" => $request -> input("apellido"),
            "telefono" => $request -> input("telefono"),
            "email" => $request -> input("email"),
            "direccion" => $request -> input("direccion")
        ]);
        return "Persona creada correctamente.";
    }

    public function IdentificarRol($request){
        $rol = $request -> input("rolDeLaEmpresa");
        if ($rol === "administrador") {
            CrearAdministrador($request);
        }
        if ($rol === "gerente") {
            CrearGerente($request);
        }
        if ($rol === "cargador") {
            CrearCargador($request);
        }
        if ($rol === "chofer") {
            CrearChofer($request);
        }
    }

    public function CrearAdministrador($request){
        Administrador::create([
            "docDeIdentidad" => $request -> input("documentoDeIdentidad"),
            "numeroAdmin" => $request -> input("numeroDeAdministrador")
        ]);
    }

    public function CrearGerente($request){
        Gerente::create([
            "docDeIdentidad" => $request -> input("documentoDeIdentidad"),
            "numeroGerente" => $request -> input("numeroDeGerente")
        ]);
    }

    public function CrearCargador($request){
        Cargador::create([
            "docDeIdentidad" => $request -> input("documentoDeIdentidad"),
            "numeroCargador" => $request -> input("numeroDeCargador")
        ]);
    }

    public function CrearChofer($request){
        Chofer::create([
            "docDeIdentidad" => $request -> input("documentoDeIdentidad"),
            "numeroChofer" => $request -> input("numeroDeChofer") 
        ]);
        CrearLicencia();
    }

    public function CrearLicencia($request){
        Licencia::create([
            "validoDesde" => $request -> input("validoDesde"),
            "validoHasta" => $request -> input("validoHasta")
        ]);
    }

    public function Crear(Request $request){
        $this->CrearUsuario($request);
        $this->IdentificarRol($request);
    }

    public function Eliminar(Request $request, $documentoDeIdentidad){
        $usuario = Usuario::where('docDeIdentidad', $documentoDeIdentidad);
        $valoresUsuario = $usuario -> get();

        if (count($valoresUsuario) === 0)
            return [ "mensaje" => "El Usuario no existe en el sistema."];
        
        if (count($valoresUsuario) != 0){
            $usuario -> delete();
            return [ "mensaje" => "El Usuario con la cedula $documentoDeIdentidad ha sido eliminado."];
        }
    }

    public function Modificar(Request $request, $documentoDeIdentidad){
        $usuario = Usuario::where('docDeIdentidad', $documentoDeIdentidad);
        $modeloUsuario = $usuario -> first();

        if ($modeloUsuario == null)
            return [ "mensaje" => "El Usuario no existe en el sistema."];
        
        if ($modeloUsuario != null){
            $modeloUsuario -> nombre = $request -> input("nombre");
            $modeloUsuario -> telefono = $request -> input("telefono");
            $modeloUsuario -> direccion = $request -> input("direccion");
            $modeloUsuario -> save();
            return [ "mensaje" => "El Usuario con la cedula $documentoDeIdentidad ha sido modificado."];
        }
    }
}
