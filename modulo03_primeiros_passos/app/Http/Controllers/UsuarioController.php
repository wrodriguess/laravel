<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function users(Request $request)
    {
        $data = [
            "quantidade" => $request->qtd
        ];

        return view('usuarios', $data);
    }
}
