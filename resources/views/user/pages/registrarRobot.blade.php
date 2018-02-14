@extends('layouts.default')
@section('huecoNav')
    @auth
        <li><a href={{ route('home') }}>Control</a></li>
    @endauth
@endsection
@section('home')
    @if(Auth::user()->isOwner())
    <div class="contenidoLogin container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrar Robot</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-info">
                                <li>{{ session('status') }}</li>
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route("user.registrarRobot") }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('modelo') ? ' has-error' : '' }}">
                                <label for="modelo" class="col-md-4 control-label">Modelo</label>
                                <div class="col-md-6">
                                    <input id="modelo" type="text" class="form-control" name="modelo" value="{{ old('modelo') }}" required autofocus>
                                    @if ($errors->has('modelo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('modelo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('host') ? ' has-error' : '' }}">
                                <label for="host" class="col-md-4 control-label">Dirección</label>
                                <div class="col-md-6">
                                    <input id="host" type="text" class="form-control" name="host" value="{{ old('host') }}" required>
                                    @if ($errors->has('host'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('host') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-rbt">
                                        Registrar Robot
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@stop