
<x-app-layout>
  <x-slot name='title'>
    my title new
  </x-slot>
        <h1>HOLA</h1>
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
      

      {{-- con esto podemos crear lógica php --}}
      @php
        $count=10;
        $init = 1;    
      @endphp

      @for($i = 1; $i <= $count; $i++)
          <p>{{ str_repeat('*', $i)}}</p>
      @endfor



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

</x-app-layout>
