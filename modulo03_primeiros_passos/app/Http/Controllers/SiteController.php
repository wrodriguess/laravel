<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $nome = "William";
        $sobrenome = "Silva";
        $dtNascimento = "01/01/1990";
        $idade = 32;

        $data = [
            "nome" => $nome,
            "sobrenome" => $sobrenome,
            "dtNascimento" => $dtNascimento,
            "idade" => $idade,
        ];

        return view('bemvindo', $data);
    }
    public function exit()
    {
        return view('tchau');
    }
}
