@extends('dashboard')
@section('container')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> <h1>Compras</h1> </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    <li class="active">compras</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Panel Compras</header>
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
                                    <a href="purchase/create">
                                        <button type="button" class="btn btn-circle btn-success btn-lg" data-toggle="modal" data-target="#addmodal">
                                            <div class="icon-holder" style="font-size: 20px;">
                                            <i class="material-icons">add_shopping_cart</i>
                                            Añadir Nueva Compra
                                        </div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <table id="DataTabl" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Fechas de la Compra</th>
                                    <th>N° de Compra</th>
                                    <th>Proveedor</th>
                                    <th>Tipo</th>
                                    <th>Comprador</th>
                                    <th>Total (Bs.)</th>
                                    <th>Impuesto(IVA)</th>
                                    <th>Estado</th>
                                    <th>PDF</th>
                                    <th>Detalle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($purchase as $temla)
                                    <tr>
                                        <td style="text-align: center;">{{$temla->id}}</td>
                                        <td>{{$temla->date_purchase}}</td>
                                        <td>{{$temla->num_purchase}}</td>
                                        <td>{{$temla->pname}}</td>
                                        <td>{{$temla->document}}</td>
                                        <td>{{$temla->uname}}</td>
                                        <td style="text-align: center;">${{number_format($temla->total,2)}}</td>
                                        <td style="text-align: center;">{{$temla->taxes}}</td>

                                        <td style="text-align: center;">
                                            @if($temla->state=="Registrado")
                                                <button type="button" class="btn btn-circle btn-success btn-sm" data-id="{{$temla->id}}" data-toggle="modal" data-target="#cambiarEstadoCompra">
                                                    Registrado
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-circle btn-danger btn-sm">
                                                    Anulado
                                                </button>
                                            @endif
                                        </td>
                                        <td style="padding-left: 20px; text-align: center;">
                                            <a href="{{url('pdfCompra',$temla->id)}}" target="_blank">
                                                <button type="button" title="Descargar..." class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect btn-danger">
                                                    <i class="material-icons">picture_as_pdf</i>
                                                </button>
                                            </a>
                                        </td>
                                        <td style="padding-left: 20px; text-align: center;">
                                            <a href="{{URL::action('PurchaseController@show',$temla->id)}}">
                                                <button type="button" title="Ver Detalles..." class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect btn-warning">
                                                    <i class="material-icons">visibility</i>
                                                </button>
                                            </a>
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
        <div class="modal" id="cambiarEstadoCompra" tabindex="-1" role="dialog" aria-labelledby="mymodal" style="display: none;" aria-hidden="true">
            <div class="col-sm-6" style="margin: 50px auto;">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-body no-padding ">
                            <div class="doctor-profile">
                                <br>
                                    <img src="assets/img/user/cancel.png" class="" style="width: 150px; height: 150px;" alt="">
                                <div class="profile-usertitle">
                                    <h1 class="text-bold full-width">¿ Desea Anular la compra ?</h1>
                                </div>
                            </div>
                            <div class="form-group modal-body">
                                <form action="{{route('purchase.destroy','test')}}" method="post" id="form_sample_1" class="form-horizontal" >
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
    </div>
</div>

@endsection
