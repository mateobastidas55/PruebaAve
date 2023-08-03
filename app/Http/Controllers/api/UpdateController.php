<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function index(Request $request)
    {


        try {
            $request->validate([
                'documento' => 'required',
                'nombre' => 'required',
                'apellido' => 'required',
                'ciudad' => 'required',
                'direccion' => 'required',
                'celular' => 'required',
                'cedula_base64' => 'required',
                'correo' => 'required',
                'contraseña' => 'required',
                'id' => 'required'

            ]);

            $usuario = UsuariosModel::find($request->all()['id']);

            if (!$usuario) {
                return response()->json(['mensaje' => 'Usuario no encontrado'], 404);
            }

            $usuario->update($request->all());
            return response()->json(['mensaje' => 'Información del usuario actualizada'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar usuario', 'details' => $e->getMessage()], 500);
        }
    }
}
