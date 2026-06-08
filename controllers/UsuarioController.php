<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // GET - Listar todos os usuários via API
    public function indexApi()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    // POST - Cadastrar novo usuário via API (usado pelo app React Native)
    public function storeApi(Request $request)
    {
        $request->validate([
            'txNome'  => 'required|string|max:255',
            'txEmail' => 'required|email|unique:usuarios,email',
            'txSenha' => 'required|string|min:4',
        ]);

        $usuario = Usuario::create([
            'nome'     => $request->txNome,
            'email'    => $request->txEmail,
            'password' => bcrypt($request->txSenha),
        ]);

        return response()->json([
            'message' => 'Usuário cadastrado com sucesso!',
            'data'    => $usuario,
        ], 201);
    }
}
