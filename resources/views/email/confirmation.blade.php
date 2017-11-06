<?php
/**
 * Created by PhpStorm.
 * User: xenlord
 * Date: 6/11/17
 * Time: 10:23
 */
?>
Hola {{ $name }},
<p>Tu registro se ha completado. Por favor, click en el enlace para tener acceso.</p>
<a href="{{url('/user/confirmation', $emailToken)}}">Click para confirmar</a>