@props(['message', 'data', 'vacio' => 'este es un valor por defecto'])

<div>
  <h1>esto es una card</h1>
  <span><b>hola mundo</b></span>
  <p><b>{{$message}}</b></p>
  <p><b>{{$data}}</b></p>
  <p><b>{{$vacio}}</b></p>
  {{-- con esto indicamos que este componente se compondra de otro componente, muy similar a react --}}
  {{$slot}}
</div>