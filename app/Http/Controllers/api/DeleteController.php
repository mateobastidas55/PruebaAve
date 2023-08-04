<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index(Request $request)
    {
        try {

            $request->validate([
                'id' => 'required'
            ]);

            // Busca al usuario por su ID   
            $usuario = UsuariosModel::find($request->get('id'));
            if ($usuario == null) {
                return response()->json(['message' => 'No se encontro el usuario'], 404);
            }
            $usuario->delete();


            // Elimina al usuario

            return response()->json(['message' => 'Usuario eliminado con éxito'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al eliminar usuario', 'details' => $e->getMessage()], 400);
        }
    }
}
