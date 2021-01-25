@extends('dashboard')
@section('container')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> <h1>Modelos</h1> </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    <li class="active">modelos</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Administracion Modelos</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                        @include('messages.messages')
                    </div>
                    <div class="card-body ">
                        <br>


                        @if(Auth::check())
        @if (Auth::user()->id_roles == 1)

                        <div class="row p-b-20">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-circle btn-success btn-lg" data-toggle="modal" data-target="#addmodal">
                                        <div class="icon-holder" style="font-size: 20px;">
                                            <i class="material-icons">add</i>
                                            Añadir Nuevo Modelo
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

        @elseif (Auth::user()->id_roles == 2)

        @endif
    @endif

                        <table id="DataTabl" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Modelo</th>
                                    <th>Detalle</th>

    @if(Auth::check())
        @if (Auth::user()->id_roles == 1)
            <th>QR</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
        @elseif (Auth::user()->id_roles == 2)

        @endif
    @endif



                                </tr>
                            </thead>
                            <tbody>

                                @foreach($model as $temla)

                                    <tr>
                                        <td style="width: 40px; text-align: center;">{{$temla->id}}</td>
                                        <td>{{$temla->name}}</td>
                                        <td>{{$temla->description}}</td>



                                        @if(Auth::check())
        @if (Auth::user()->id_roles == 1)
        <td style="text-align: center;">
                                            <a href="{{route('models.show',$temla->id)}}" type="button" title="Imprimir qr" class=" btn btn-circle btn-success btn-sm" >
                                               Imprimir
                                            </a>
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

                                        <td style="width: 80px; padding-left:25px; padding-right: 15px; text-align: center;">
                                            <button type="button" title="Editar" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect btn-warning"  data-id="{{$temla->id}}" data-name="{{$temla->name}}" data-description="{{$temla->description}}" data-toggle="modal" data-target="#editmodalm">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                        </td>
        @elseif (Auth::user()->id_roles == 2)

        @endif
    @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!--agragar-->
        <div class="modal" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-8" style="margin: 50px auto;">
                <div class="panel">
                    <div class="panel-heading panel-heading-green">
                        <header style="font-size: 28px;">
                                <i class="fa fa-plus"></i>
                                Añadir Nuevo Modelo
                        </header>
                    </div>
                    <br>
                    <label class="control-label col-sm-12" for="name">Estos campos son obligatorios (
                        <span class="required">*</span> )
                    </label>
                    <br>
                    <div class="form-group">

                        <form action="{{route('models.store')}}" method="post" id="form_sample_1" class="form-horizontal" >

                            {{csrf_field()}}

                            @include('model.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
<!--end agragar-->
<!--editar-->
        <div class="modal" id="editmodalm" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-8" style="margin: 50px auto;">
                <div class="panel">
                    <div class="panel-heading panel-heading-yellow">
                        <header style="font-size: 28px;">
                                <i class="fa fa-plus"></i>
                                Modificar Modelo
                        </header>
                    </div>
                    <br>
                    <label class="control-label col-sm-12" for="name">Estos campos son obligatorios (
                        <span class="required">*</span> )
                    </label>
                    <br>
                    <div class="form-group modal-body">

                        <form action="{{route('models.update','test')}}" method="post" id="form_sample_1" class="form-horizontal" >

                            {{method_field('patch')}}
                            {{csrf_field()}}

                            <input type="hidden" id="id" name="id" value="">

                            @include('model.form')

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
                                    <h1 class="text-bold full-width">Desea desactivar el modelo?</h1>
                                </div>
                            </div>
                            <div class="form-group modal-body " style="margin-bottom: 0;">
                                <form action="{{route('models.destroy','test')}}" method="post" id="form_sample_1" class="form-horizontal" >
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
                                    <h1 class="text-bold full-width">Desea activar el modelo?</h1>
                                </div>
                            </div>
                            <div class="form-group modal-body"style="margin-bottom: 0;">
                                <form action="{{route('models.destroy','test')}}" method="post" id="form_sample_1" class="form-horizontal" >
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
<!-- end page content -->

@endsection
