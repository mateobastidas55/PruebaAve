<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class CreateController extends Controller
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
                'contraseña' => 'required'

            ]);
            // se agregan las validaciones

            $nuevoUsuario = [
                'documento'            => $request->all()['documento'],
                'nombre'               => $request->all()['nombre'],
                'apellido'             => $request->all()['apellido'],
                'ciudad'               => $request->all()['ciudad'],
                'direccion'            => $request->all()['direccion'],
                'celular'            => $request->all()['celular'],
                'cedula_base64'        => $request->all()['cedula_base64'],
                'correo'               => $request->all()['correo'],
                'contraseña'           => $request->all()['contraseña'],
            ];


            UsuariosModel::create($nuevoUsuario);
            return response()->json(['message' => 'Usuario Creado con Exito'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear usuario', 'details' => $e->getMessage()], 500);
        }
    }
}
