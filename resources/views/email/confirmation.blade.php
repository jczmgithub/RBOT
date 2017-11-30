Hola {{ $name }},
<p>Tu registro se ha completado. Por favor, click en el enlace para tener acceso.</p>
<a href="{{url('/user/confirmation', $emailToken)}}">Click para confirmar</a>