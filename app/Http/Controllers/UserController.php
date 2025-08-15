<?php

namespace App\Http\Controllers;

class UserController
{
  public function index()
  {
    return "mostrando todos los usuarios";
  }
  public function store()
  {
    return "guardando  usuarios";
  }
  public function create()
  {
    return "creando un usuario";
  }
  public function show($user)
  {
    return "mostrando un usuario en especifico $user";
  }
  public function update($user)
  {
    return "actualizando un usuario en especifico $user";
  }
  public function destroy($user)
  {
    return "eliminando un usuario en especifico $user";
  }
  public function edit($user)
  {
    return "editando un usuario en especifico $user";
  }
}
