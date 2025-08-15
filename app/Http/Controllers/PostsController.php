<?php

namespace App\Http\Controllers;

class PostsController
{


  public function posts()
  {
    return "mostrando todos los posts de la aplicación";
  }

  public function post($id)
  {
    return "mostrando el posts con id $id";
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
