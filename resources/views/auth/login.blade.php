@extends('auth.container')

@section('auth')
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body" style="background-color: white;border-radius: 10px;">
                <div class="mar-ver pad-btm" style="padding-bottom: 0px;">

                    <img src="img/seguridad.png" alt="" style="width: 100%; height: 100%;">
                    <h1 class="h3">Iniciar Sesión</h1>

                </div>
                  <form class="user was-validated" method="POST" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="form-group {{$errors->has('user' ? 'is-invalid' : '')}}">
                        <label class="col-md-3 control-label"><b>Usuario:</b></label>
                        <input type="text" value="{{old('user')}}" class="form-control" name="user" id="user" placeholder="Ingresar Usuario" autofocus="">
                    </div>
                    <div class="form-group {{$errors->has('password' ? 'is-invalid' : '')}}">
                        <label class="col-md-3 control-label"><b>Contraseña:</b></label>
                        <input type="password" name="password" id="password"  class="form-control" placeholder="Ingresar Contraseña">
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">INGRESAR</button>

                    <div style="padding-top: 10px;">
                        {!!$errors->first('user',
                            '<div class="alert alert-danger" style="margin-bottom: 0px;">
                                Usuario y/o Contraseña Incorrecta
                            </div>'
                        )!!}
                    </div>
        
                </form>
            </div>
        </div>
    </div>
@endsection
