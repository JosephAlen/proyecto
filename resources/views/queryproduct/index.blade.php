@extends('dashboard')
@section('container')


<div class="page-content-wrapper">
    <div class="page-content">


        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Productos</header>
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
                                    <th>Producto</th>
                                    <!--<th>Codigo</th>-->
                                    <th>Modelo</th>
                                    <th>Color</th>
                                    <th>Tamaño</th>
                                    <th>Precio (Bs)</th>
                                    <th>Stock</th>
                                    <!--<th>Detalle</th>-->
                                    <th>Imagen</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($products as $temla)

                                    <tr>
                                        <td style="text-align: center;">{{$temla->id}}</td>
                                        <td>{{$temla->name}}</td>
                                        <!--<td>{{$temla->code}}</td>-->
                                        <td>{{$temla->models}}</td>
                                        <td>{{$temla->colour}}</td>
                                        <td style="text-align: center;">{{$temla->size}}</td>
                                        <td style="text-align: center;">{{$temla->sale_price}}</td>
                                        <td style="text-align: center;">{{$temla->stock}}</td>
                                        <!--<td>{{$temla->description}}</td>-->
                                        <td>
                                            <img src="{{asset('storage/img/'.$temla->image)}}" id="image1"class="img-responsive" width="100px" height="100px" alt="{{$temla->name}}">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
