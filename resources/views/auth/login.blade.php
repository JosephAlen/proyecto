@extends('auth.container')

@section('login')
<div class="row justify-content-center">
    <div class="col-xl-15 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
                <img src="img/seguridad.png" alt="" style="width: 600px; height: 450px;">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="text-gray-900 mb-4">Iniciar Sesion</h1>
                  </div>
                  <hr>
                  <form class="user was-validated" method="POST" action="{{route('login')}}">
                    {{csrf_field()}}

                    <div class="form-group mb-3{{$errors->has('user' ? 'is-invalid' : '')}}" style="margin-bottom: 30px; margin-top: 30px;">
                      <input type="text" class="form-control form-control-user" value="{{old('user')}}" name="user" id="user" placeholder="Introduzca su Usuario..." style="border-color: black; background-image: none;">

                    </div>
                    

                    <div class="form-group mb-4{{$errors->has('password' ? 'is-invalid' : '')}}" style="margin-bottom: 30px; margin-top: 30px;">
                      <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Introduzca su Contraseña..." style="border-color: black;background-image: none;">
                      
                      {!!$errors->first('user','<span class="invalid-feedback">Usuario y/o Contraseña Incorrecta</span>')!!}
                      {!!$errors->first('password','<span class="invalid-feedback">Usuario y/o Contraseña Incorrecta</span>')!!} 
                    </div>

                    <hr>

                    <div class="form-group" style="margin-top: 40px;">
                      <input type="submit" class="btn btn-success btn-user btn-block">
                    </div>

                    <hr>
                  </form>
                </div>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
