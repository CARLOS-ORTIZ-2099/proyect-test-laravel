{{-- utilizando herencia de plantillas --}}
@extends('layout.app2')

{{-- con esto definimos un contenido y le asignamos un nombre por el cual 
     lo invocaremos más adelante  
--}}
@section('title', 'show-page')
    
{{-- si el contenido es demasiado extenso entonces lo definimos con   
     etiquetas de apertura y cierre 
--}}

{{-- section define un contenido a mostrar --}}
@section('body-show')
      <h1>show page detalle del POST </h1>

  <p>bienvenido
      
    @isset($name)
      <p>{{$name}}</p>
    @else
      desconocido
    @endisset

  </p>
    <p>el valor global es <?php echo $global?></p>
@endsection


{{-- la directiva push añade elementos de un determinado grupo a la vista sin sobreescribir o anular los elementos previos del mismo grupo --}}
@push('css')
    <link rel="" href="holamundo.com">
@endpush
@push('css')
    <link rel="" href="holaravel.com">
@endpush

@push('js')
    <script src="/example.js"></script>
    <script src="/algoritmos.js"></script>
@endpush