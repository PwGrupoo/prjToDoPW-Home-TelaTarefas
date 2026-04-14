<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();

        return view('usuario')->with('usuario', $usuario);
    }

    public function create()
    {
        return view('nivelusuario.contato');
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->nome = $request->txNome;
        $usuario->email = $request->txEmail;
        $usuario->password = $request->txSenha;
        $usuario->created_at = date('Y-m-d H:i:s');
        $usuario->updated_at = date('Y-m-d H:i:s');

        $usuario->save();

        return view('nivelusuario.contato');


    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}