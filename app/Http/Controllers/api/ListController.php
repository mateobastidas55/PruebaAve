<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        try {
            $users = UsuariosModel::all(); // Obtén todos los usuarios

            return response()->json($users, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener usuarios', 'details' => $e->getMessage()], 500);
        }
    }
}
