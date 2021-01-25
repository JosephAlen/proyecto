@extends('dashboard')
@section('container')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> <h1>Usuarios</h1> </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    <li class="active">usuarios</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Administracion Usuarios</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <br>
                        <div class="row p-b-20">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-circle btn-success btn-lg" data-toggle="modal" data-target="#addmodaluser">
                                        <div class="icon-holder" style="font-size: 20px;">
                                            <i class="material-icons">person_add</i>
                                            Añadir Nuevo Usuario
                                        </div>
                                    </button>  
                                </div>
                            </div> 
                        </div>
                        <table id="DataTabl" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <!--<th>Nombre</th>-->
                                    <th>Rol</th>
                                    <!--<th>Tipo de Documnto</th>-->
                                    <th>Documento</th>
                                    <!--<th>Direccion</th>-->
                                    <th>Telefono/Celular</th>
                                    <th>Correo Electronico</th>
                                    <th>Usuario</th>
                                    <th>Imagen</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($user as $temla)
                                
                                    <tr>
                                        <td style="text-align: center;">{{$temla->id}}</td>
                                        <!--<td>{{$temla->name}}</td>-->
                                        <td>{{$temla->name_roles}}</td>
                                        <!--<td>{{$temla->document}}</td>-->
                                        <td>{{$temla->nro_document}}</td>
                                        <!--<td>{{$temla->address}}</td>-->
                                        <td>{{$temla->telephone}}</td>
                                        <td>{{$temla->email}}</td>
                                        <td>{{$temla->user}}</td>
                                        <td>
                                            <img src="{{asset('storage/img/'.$temla->image)}}" id="image1"class="img-responsive" width="100px" height="100px" alt="{{$temla->name}}">
                                        </td>
                                        <td style="text-align: center;">
                                            @if($temla->switch=="1")
                                                <button type="button" class="btn btn-circle btn-success btn-sm" data-id="{{$temla->id}}" data-toggle="modal" data-target="#estadomodal1">
                                                    Activado
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-circle btn-danger btn-sm" data-id="{{$temla->id}}" data-toggle="modal" data-target="#estadomodal2">
                                                    Desactivado
                                                </button>
                                            @endif
                                        </td>
                                        <td style="padding-left: 20px; text-align: center;">
                                            <button type="button" title="Editar" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect btn-warning" data-toggle="modal" data-target="#editmodaluser" data-id="{{$temla->id}}" data-name="{{$temla->name}}" data-document="{{$temla->document}}" data-nro_document="{{$temla->nro_document}}" data-address="{{$temla->address}}" data-telephone="{{$temla->telephone}}" data-email="{{$temla->email}}" data-id_roles="{{$temla->id_roles}}"  data-user="{{$temla->user}}"  data-imagen="{{$temla->image}}">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!-- end page content -->

<!--agragar-->
        <div class="modal" id="addmodaluser" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-8" style="margin: 50px auto;">
                <div class="panel">
                    <div class="panel-heading panel-heading-green">
                        <header style="font-size: 28px;">
                                <i class="fa fa-plus"></i>
                                Añadir Nuevo Usuario
                        </header>
                    </div>
                    <br>
                    <label class="control-label col-sm-12" for="name">Estos campos son obligatorios (
                        <span class="required">*</span> )
                    </label>
                    <br>
                    <div class="form-group">
                        <form action="{{route('user.store')}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @include('user.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!--end agragar-->

<!--editar-->
        <div class="modal" id="editmodaluser" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-8" style="margin: 50px auto;">
                <div class="panel">
                    <div class="panel-heading panel-heading-yellow">
                        <header style="font-size: 28px;">
                                <i class="fa fa-plus"></i>
                                Modificar Usuario
                        </header>
                    </div>
                    <br>
                    <label class="control-label col-sm-12" for="name">Estos campos son obligatorios (
                        <span class="required">*</span> )
                    </label>
                    <br>
                    <div class="form-group modal-bodyy">
                        <form action="{{route('user.update','test')}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                            {{method_field('patch')}}
                            {{csrf_field()}}

                            <input type="hidden" id="id" name="id" value="">
                            
                            @include('user.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!--end editar-->
<!--estado-->
        <div class="modal" id="estadomodal1" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-6" style="margin: 50px auto;">
                <div class="col-md-12">
                    <div class="card card-box" style="border-radius: 40px;">
                        <div class="card-body no-padding">
                            <div class="doctor-profile ">
                                <br>
                                    <img src="assets/img/user/danger.png" class="" style="width: 150px; height: 150px;" alt=""> 
                                <div class="profile-usertitle">
                                    <h1 class="text-bold full-width">Desea desactivar el usuario?</h1>
                                </div>
                            </div>
                            <div class="form-group modal-body " style="margin-bottom: 0;">
                                <form action="{{route('user.destroy','test')}}" method="post" id="form_sample_1" class="form-horizontal" >
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <input type="hidden" id="id" name="id" value="">
                                    <div class="form-group" style="margin-left: 80px;">
                                        <button type="button" class="btn btn-default btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                            Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-info btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success" style="margin-left: 50px;">
                                            <i class="fa fa-check"></i>
                                            Desactivar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--end estado-->
<!--estado-->
        <div class="modal" id="estadomodal2" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-6" style="margin: 50px auto;">
                <div class="card card-box" style="border-radius: 40px;">
                        <div class="card-body no-padding">
                            <div class="doctor-profile ">
                                <br>
                                    <img src="assets/img/user/danger.png" class="" style="width: 150px; height: 150px;" alt=""> 
                                <div class="profile-usertitle">
                                    <h1 class="text-bold full-width">Desea activar el usuario?</h1>
                                </div>
                            </div>
                            <div class="form-group modal-body"style="margin-bottom: 0;">
                                <form action="{{route('user.destroy','test')}}" method="post" id="form_sample_1" class="form-horizontal" >
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <input type="hidden" id="id" name="id" value="">
                                    <div class="form-group" style="margin-left: 80px;">
                                        <button type="button" class="btn btn-default btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                            Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-info btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success" style="margin-left: 60px;">
                                            <i class="fa fa-check"></i>
                                            Activar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--end estado-->
    </div>
</div>

@endsection