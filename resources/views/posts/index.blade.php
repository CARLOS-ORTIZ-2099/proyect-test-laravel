<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  {{-- 1er forma de mostrar la variable pasada por el backend --}}
{{-- <?php echo $etiqueta?> --}}
  
{{-- 2da forma de mostrar la variable pasada por el backend --}}
{{-- con esto escapamos los valores de las variables (recomendado)--}}
{{$etiqueta}}
{{-- con esto no escapamos los valores de las variables --}}
{!!$etiqueta!!}


  <h1>index page</h1>


  <script>
    // directivas de blade
    // recibiendo un array desde el backen y haciendo la conversion a json
    // primer forma
    /*  let posts = {!!json_encode($posts)!!};
        console.log(posts);
    */

    // segunda forma
    let posts = @json($posts);
    console.log(posts);


  </script>

      {{-- directivas condicionales --}}
    @if (true)
      <p>este valor es true</p>
    
    @else <p>este valor no es verdadero</p>

    @endif


    @unless (false)
        <p>este valor es false</p>

    @endunless

    @isset($etiqueta)
        <p>este valor existe y esta establecido</p>
    @endisset

    @empty($nulo)
        <p>esta vacio o no existe</p>
    @endempty

    

  @switch($dia)
      @case(1)
          <p>es lunes</p>
      @break
      @case(2)
          <p>es martes</p>
      @break    
      @case(3)
          <p>es miercoles</p>
      @break
      @case(4)
          <p>es jueves</p>
      @break
      @case(5)
          <p>es viernes</p>
      @break
      @default
        <p>debe ser sabado o domingo</p>

  @endswitch

{{-- bucles --}}

<ul>
  @foreach ($posts as $post)
    <li>
     <h2> {{$post['title']}}</h2>
     <p>{{$post['content']}}  </p>
     
    </li>      
  @endforeach

</ul>


{{-- <ul>
  @forelse ($posts as $post)
    <li>
     <h2> {{$post['title']}}</h2>
     <p>{{$post['content']}}  </p>
      
    </li> 
    @empty
    <p>no hay datos para mostrar</p> 
  @endforelse

</ul>
 --}}

 @for($i = 1; $i <= $count; $i++)
     <p>{{ str_repeat('*', $i)}}</p>
 @endfor

 {{-- con esto podemos crear lógica php --}}
@php
  $init = 1;    
@endphp

<p>------------</p>
@while ($count >= $init)
    <p>{{str_repeat('*', $count)}}</p>

    @php
      $count-=1;   
    @endphp
@endwhile

{{-- break y continue --}}
@for ($i =0; $i < 10; $i++)
 
    @continue($i % 3 == 0)

    <li>{{$i}}</li>
 
@endfor


@for ($i = 0; $i < 10; $i++)
    @break($i == 5)
 
    <li>{{str_repeat('+', $i)}}</li>
 
@endfor
<p><b>saliste del bucle</b></p>


</body>
</html>
