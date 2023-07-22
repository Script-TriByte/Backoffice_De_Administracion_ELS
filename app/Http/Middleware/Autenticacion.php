<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Autenticacion
{
    public function handle(Request $request, Closure $next)
    {
        $tokenHeader = [ "Authorization" => $request -> header("Authorization")];

        $response = Http::withHeaders($tokenHeader) -> get("http://localhost:8000/api/v1/Validar");
        if($response -> successful())
            return $next($request);
            
        return response(["mensaje" => "Sin autorizacion."], 403);
    }
}