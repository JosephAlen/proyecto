@extends('dashboard')
@section('container')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> <h1>Clientes</h1> </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    <li class="active">Cliente</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Administracion Clientes</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>

                        @include('messages.messages')


                    </div>
                    <div class="card-body ">
                        <br>
                        <div class="row p-b-20">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-circle btn-success btn-lg" data-toggle="modal" data-target="#addmodalclient">
                                        <div class="icon-holder" style="font-size: 20px;">
                                            <i class="material-icons">person_add</i>
                                            Añadir Nuevo Cliente
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <table id="DataTabl" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <!--<th>Tipo de Documento</th>-->
                                    <th>Documento</th>
                                    <th>Direccion</th>
                                    <th>Tel/Cel</th>
                                    <th>Correo Electronico</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($client as $temla)

                                    <tr>
                                        <td style="width: 40px; text-align: center;">{{$temla->id}}</td>
                                        <td>{{$temla->name}}</td>
                                        <!--<td>{{$temla->document}}</td>-->
                                        <td>{{$temla->nro_document}}</td>
                                        <td>{{$temla->address}}</td>
                                        <td>{{$temla->telephone}}</td>
                                        <td>{{$temla->email}}</td>
                                        <td style="width: 80px; padding-left:25px; padding-right: 15px; text-align: center;">
                                            <button type="button" title="Editar" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect btn-warning" data-toggle="modal" data-target="#editmodalclient" data-id="{{$temla->id}}" data-name="{{$temla->name}}" data-document="{{$temla->document}}" data-nro_document="{{$temla->nro_document}}" data-address="{{$temla->address}}" data-telephone="{{$temla->telephone}}" data-email="{{$temla->email}}">
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
<!--agragar-->
        <div class="modal" id="addmodalclient" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-8" style="margin: 50px auto;">
                <div class="panel">
                    <div class="panel-heading panel-heading-green">
                        <header style="font-size: 28px;">
                                <i class="fa fa-plus"></i>
                                Añadir Nuevo Cliente
                        </header>
                    </div>
                    <br>
                    <label class="control-label col-sm-12" for="name">Estos campos son obligatorios (
                        <span class="required">*</span> )
                    </label>
                    <br>
                    <div class="form-group">

                        <form action="{{route('client.store')}}" method="post" id="form_sample_1" class="form-horizontal" >

                            {{csrf_field()}}

                            @include('client.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end agragar-->
        <!--editar-->
        <div class="modal" id="editmodalclient" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-8" style="margin: 50px auto;">
                <div class="panel">
                    <div class="panel-heading panel-heading-yellow">
                        <header style="font-size: 28px;">
                                <i class="fa fa-plus"></i>
                                Modificar Cliente
                        </header>
                    </div>
                    <br>
                    <label class="control-label col-sm-12" for="name">Estos campos son obligatorios (
                        <span class="required">*</span> )
                    </label>
                    <br>
                    <div class="form-group modal-body">

                        <form action="{{route('client.update','test')}}" method="post" id="form_sample_1" class="form-horizontal" >
                            {{method_field('patch')}}
                            {{csrf_field()}}
                            <input type="hidden" id="id" name="id" value="">
                            @include('client.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
<!--end editar-->
    </div>
</div>
<!-- end page content -->

@endsection
