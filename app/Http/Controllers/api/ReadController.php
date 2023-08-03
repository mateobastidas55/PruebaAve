<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;


class ReadController extends Controller
{

    public function index(Request $request)
    {

        try {

            $request->validate([
                'id' => 'required'
            ]);
            // Busca al usuario por su ID

            $usuario = UsuariosModel::find($request->all()['id']);

            if ($usuario) {
                return response()->json(['usuario' => $usuario], 200);
            } else {
                return response()->json(['mensaje' => 'Usuario no encontrado'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al leer usuario', 'detalles' => $e->getMessage()], 500);
        }
    }
    //
}
