@extends('layouts.default')
@section('huecoNav')
    @auth
        <li><a href={{ route('home') }}>Control</a></li>
    @endauth
@endsection
@section('home')
    {{--TODO Comprobar permisos del admin robot para que le saque el formulario--}}
    <div class="contenidoLogin container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-info">
                                <li>{{ session('status') }}</li>
                            </div>
                        @endif
                            <table class=table id="">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            @foreach($users as $key => $data)
                                <tr>
                                    <td>
                                        {{ $data->name }}
                                    </td>
                                    <td>
                                       {{ $data->email }}
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" onclick="eliminarFila(this)"><span class="fa fa-times" id="borrarFila" ></span></button>
                                    </td>
                                </tr>


                            @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

