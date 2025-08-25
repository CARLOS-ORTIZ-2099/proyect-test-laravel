<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PostsController
{

  public function index()
  {
    $posts = [
      ['title' => 'title 1', 'content' => 'contenido 1'],
      ['title' => 'title 2', 'content' => 'contenido 2'],
      ['title' => 'title 3', 'content' => 'contenido 3']
    ];
    $etiqueta = '<p>esto es un parrafo</p>';
    $dia = 4;
    return view(
      'posts.index',
      [
        'etiqueta' => $etiqueta,
        'posts' => $posts,
        'dia' => $dia
      ]
    );
  }

  public function welcome()
  {
    $posts = [
      ['title' => 'title 1', 'content' => 'contenido 1'],
      ['title' => 'title 2', 'content' => 'contenido 2'],
      ['title' => 'title 3', 'content' => 'contenido 3']
    ];
    $etiqueta = '<p>esto es un parrafo</p>';
    $dia = 4;

    return view('welcome', [
      'etiqueta' => $etiqueta,
      'posts' => $posts,
      'dia' => $dia
    ]);
  }


  public function posts()
  {
    // devolviendo a una vista con la función auxiliar global view() y pasandole parametros
    //return view('posts.show')->with('name', 'juan');
    $users = DB::select("SELECT * FROM sessions");
    //var_export($users);
    return view('posts.show', ['name' => 'juan']);
  }

  public function post($id)
  {
    // comprobando existencia de una vista
    if (View::exists('admin.profile')) {
      echo "entro";
      return View::make('admin.profile');
    }
    // para renderizar vista tambien podemos usar fachadas
    return View::make('posts.edit', ['id' => $id]);
  }

  public function postsCreate()
  {
    return "creando post";
  }

  public function deletePost($id)
  {
    return "eliminando el posts con id $id";
  }
}
