<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $ingredientes = ['farinha', 'ovos', 'farinha 2', 'ovos 2'];

        $data = [
            'nome' => 'William',
            'html' => "<b style='color: red'>Código HTML</b>",
            'ingredientes' => $ingredientes,
        ];
        return view('bemvindo', $data);
    }

    public function exercicio1()
    {
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2
            ]
        ];

        $data = [
            'pessoas' => $pessoas,
        ];
        return view('exercicio1', $data);
    }

    public function exercicio2()
    {
        // $numero = 1;

        $url = 'https://i.pravatar.cc/150?img=';

        $dados['url'] = $url;

        return view('exercicio2', $dados);
    }

    public function index2()
    {
        return view('include');
    }

    public function components()
    {
        return view('comp');
    }

    public function layout()
    {
        return view('site');
    }

    public function layout2()
    {
        return view('site2');
    }
}
