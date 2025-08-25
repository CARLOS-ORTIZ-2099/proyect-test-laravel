<div {{$attributes->merge(
  [
    'class' => "border border-blue-500",
    'añadido' =>'123',
    
  ]
)}} >
    <h1>Esto es un Modal de laravel {{date('Y-m-d')}}</h1>
    <h3>{{$size}}</h3>
    <h3>{{$message}}</h3>
    <h3>{{$messageLong}}</h3>
    
   
    <p>{{$slot}}</p>
    <p>{{$nombrado}}</p>
     <h3>
      los atributos que no se definen ni en la clase ni como slots se guardan en la variable $attributes, el proposito de esta es proporcionar atributos validos adicionales html al componente, como clases, id, etc.
      Con el método merge podemos fusionar atributos , si existen un atributo en la invocacion del componente y lo volvemos a definir en el metodo merge se actualiza si no existe se crea
    </h3>
    <p>{{$attributes}}</p>
  
</div>