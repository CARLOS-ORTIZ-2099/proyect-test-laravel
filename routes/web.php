<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/* definición básica de rutas */

/* 
  Route::get('/', function () {
    return view('welcome');
  });


  Route::get('/saludo', function () {
    return "hola mundo de laravel";
  });
 
*/

/* rutas con parametros (opcionales) y restricciones de expresiones regulares*/

/* 

  Route::get('/profesores/salon', function () {
    return "los salones de todos los profesores";
  });


  Route::get('/profesores/{id}', function ($id) {
    return "profesor con id $id";
  });

  Route::get('/cursos/{categoria}/{id}', function ($categoria, $id) {
    return "este es el curso con id $id y de la categoria $categoria";
  })->where(['id' => '[0-9]+', 'categoria' => '[a-z]+']);


  Route::get('/posts/{categoria?}', function ($categoria = null) {
    return "post con categoria $categoria";
  })->whereAlpha('categoria');

*/


/* restricciones de expresiones regulares globales */

/* 
  Route::get('/users/{userId}', function ($userId) {
    return "usuario con id $userId";
  });


  Route::get('/comments/{userId}', function ($userId) {
    return "comentario del usuario con id $userId";
  });
*/





/* nombre de rutas 
   Los nombre de ruta permiten darle un identificador a nuestras rutas, ya  
   que muchas veces vamos a querer hacer mencion a dichas rutas por la URI
   pero estas eventualmente pueden cambiar, entonces lo ideal sería hacer mención a los nombres y no a la URI como tal.
   En resumidas cuentas es mejor siempre hacer mención a una ruta por su nombre y no por la URI ya que esta eventualmente puede cambiar
*/




Route::get('/', function () {
  // esto hace redirecciones a la ruta cuyo nombre coincida con el parametro que reciba la funcion route
  //  return redirect()->route('posts.posts');

  // esto muestra la URI de la ruta cuyo nombre coincida con el parametro que reciba la funcion route
  //return route('posts.posts');

  // si la ruta a la cual vamos a hacer mencion mediante su nombre recibe parametros,  lo pasamos como segundo parametro de la funcion route
  // return route('posts.post', 80);
  // en caso recibiera más de 1
  // return route('posts.post', ['id' => 80, 'user' => 80]);
});

Route::get('/', [PostsController::class, 'index'])->name('posts.index');
Route::get('/welcome', [PostsController::class, 'welcome'])->name('posts.index');

Route::get('/posts', [PostsController::class, 'posts'])->name('posts.posts');

Route::get('/cambiodepostaalgomas', [PostsController::class, 'posts'])->name('posts.posts');


Route::get('/posts/{id}', [PostsController::class, 'post'])->where(['id' => '[0-9]+'])->name('posts.post');

Route::post('/posts/crear', [PostsController::class, 'postsCreate'])->name('posts.postsCreate');

Route::delete('/posts/eliminar/{id}', [PostsController::class, 'deletePost'])->name('posts.deletePost');




/* rutas para un crud básico (Route Resource)
   este código sirve para para crear una "plantilla" para un sistema que 
   requiera un CRUD 
*/

/* Route::resource('users', UserController::class);
   // creando multiples recursos a la vez 
   Route::resources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
   ]) 
*/


/*  grupo de rutas 
    esta sirven para agrupar rutas que tengan cosas en común como ciertas
    validaciones, parametros, etc. Podemos encadenar tantas directivas como 
    querramos 
*/


/* Route::controller(UserController::class)
  ->prefix('users')
  ->name('users.')
  ->group(function () {
    Route::get('', 'index')->name('index');
    Route::post('', 'store')->name('store');
    Route::get('/create', 'create')->name('create');
    Route::get('/{user}', 'show')->name('show');
    Route::put('/{user}', 'update')->name('update');
    Route::delete('/{user}', 'destroy')->name('destroy');
    Route::get('/{user}/edit', 'edit')->name('edit');
  });
 */
