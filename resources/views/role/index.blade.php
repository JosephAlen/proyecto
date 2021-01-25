@extends('dashboard')
@section('container')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> <h1>Roles</h1> </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    <li class="active">roles</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Administracion Roles</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">

                        <table id="DataTabl" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($role as $temla)
                                
                                    <tr>
                                        <td style="width: 40px; text-align: center;">{{$temla->id}}</td>
                                        <td>{{$temla->name}}</td>

                                        <td style="text-align: center;">
                                            @if($temla->switch=="1")
                                                <button type="button" class="btn btn-circle btn-success btn-sm" data-id="{{$temla->id}}" data-name="{{$temla->name}}" data-toggle="modal" data-target="#estadomodal1">
                                                    Activado
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-circle btn-danger btn-sm" data-id="{{$temla->id}}" data-toggle="modal" data-target="#estadomodal2">
                                                    Desactivado
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!--estado-->
        <div class="modal" id="estadomodal1" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-6" style="margin: 50px auto;">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-body no-padding ">
                            <div class="doctor-profile">
                                <br>
                                    <img src="assets/img/user/cancel.png" class="" style="width: 150px; height: 150px;" alt=""> 
                                <div class="profile-usertitle">
                                    <h1 class="text-bold full-width">¿ Desea Desactivar el Rol ?</h1>
                                </div>
                            </div>
                            <div class="form-group modal-body">
                                <form action="{{route('role.destroy','test')}}" method="post" id="form_sample_1" class="form-horizontal" >
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <input type="hidden" id="id" name="id" value="">
                                    <div class="offset-md-3" style="text-align: justify;">
                                        <button type="button" class="btn btn-default btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                            Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-info btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success">
                                            <i class="fa fa-check"></i>
                                            Aceptar
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
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-body no-padding ">
                            <div class="doctor-profile">
                                <br>
                                    <img src="assets/img/good.png" class="" style="width: 150px; height: 150px;" alt=""> 
                                <div class="profile-usertitle">
                                    <h1 class="text-bold full-width">¿ Desea Activar el Rol ?</h1>
                                </div>
                            </div>
                            <div class="form-group modal-body">
                                <form action="{{route('role.destroy','test')}}" method="post" id="form_sample_1" class="form-horizontal" >
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <input type="hidden" id="id" name="id" value="">
                                    <div class="offset-md-3" style="text-align: justify;">
                                        <button type="button" class="btn btn-default btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                            Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-info btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success">
                                            <i class="fa fa-check"></i>
                                            Aceptar
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