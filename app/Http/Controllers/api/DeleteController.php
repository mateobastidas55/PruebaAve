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
            $usuario = UsuariosModel::findOrFail($request->all()['id']);

            // Elimina al usuario
            $usuario->delete();

            return response()->json(['message' => 'Usuario eliminado con éxito'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al eliminar usuario', 'details' => $e->getMessage()], 500);
        }
    }
}
