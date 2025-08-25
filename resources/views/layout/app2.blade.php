<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 @stack('css')
</head>
<body>
  {{-- yield muestra el contenido definido anteriormente con section --}}
  @yield('body-show')
  @yield('sinValor', 'este es un valor por defecto')

  {{-- la directiva stack muestra contenido que se podra apilar uno sobre otro sin sobreescribir o anular, como si pasa con la directiva yield --}}
  @stack('js')
  
</body>
</html>