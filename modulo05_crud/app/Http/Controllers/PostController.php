<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        // Definindo os valores do meu insert
        $newPost = [
            'title' => 'Meu primeiro post',
            'content' => 'Conteúdo Qualquer',
            'author' => 'Alessandro',
        ];

        // Instanciando o model/classe
        $posts = new Post($newPost);

        // Salvando efetivamente os dados no banco de dados
        $posts->save();

        return 'Post adicionado';

        // OU
        // $posts = new Post();
        // $posts->title = 'Meu primeiro post';
        // $posts->content = 'Conteúdo Qualquer';
        // $posts->author = 'Alessandro';
        // $posts->save();
    }
}
