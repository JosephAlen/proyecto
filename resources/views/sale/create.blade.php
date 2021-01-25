@extends('dashboard')
@section('container')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> <h1>Anadir Venta</h1> </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    <li><i class=""></i>&nbsp;<a class="parent-item" href="index-2.html">Ventas</a>&nbsp;<i class="fa fa-angle-right"></i>
                    <li class="active">Anadir Venta</li>
                </ol>
            </div>
        </div>

        <form action="{{route('sale.store')}}" method="post" id="form_sample_1" class="form-horizontal" >
        	{{csrf_field()}}
        <div class="row">
        	<div class="col-sm-8 col-md-5">
        		<div class="card card-box">
                    <div class="card-head">
                        <header></header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
						<div class="form-group">
                            <div class="form-body">
                            	<div class="col-sm-12 row">
	        	                    <label style="text-align: left;" class="control-label col-sm-12" for="name">Estos campos son obligatorios (
					                    <span class="required">*</span> )
					                </label>
					            </div> 
					            <br>
                            	<div class="col-sm-12 row" style="justify-content: center;">
						            <label class="col-sm-9" for="namem">Nombre del Cliente
						                <span class="required"> * </span>
						            </label>
						            <div class="col-sm-9" >
						                <select class="form-control" id="id_cliente" name="id_cliente" data-live-search="true">
						                    <option value="0" disabled>Selecciona un Opcion</option>
						                    @foreach($clients as $prove)
						                    <option value="{{$prove->id}}">{{$prove->name}}</option>     
						                    @endforeach
						                </select>
						            </div>
						        </div>
						        <br>
						        <div class="col-sm-12 row"style="justify-content: center;">
						            <label class="col-sm-9" for="documento">Documento
						                <span class="required"> * </span>
						            </label>
						            <div class="col-sm-9">
						                <select class="form-control" id="documento" name="documento">
				                            <option value="FACTURA">FACTURA</option>
						                </select>
						            </div>
						        </div>
						        <br>
							    <div class="col-sm-12 row"style="justify-content: center;">
							        <label class="col-md-9">Número Venta
							            <span class="required"> * </span>
							        </label>
							        <div class="col-md-9">
							            <input type="text" name="num_venta" id="num_venta" class="form-control" placeholder="Introduzca el modelo..."> 
							        </div>
							    </div>  
						        <br>
							    <div class="col-sm-12 row"style="justify-content: center;">
						            <label class="col-sm-9" for="namem">Producto
						                <span class="required"> * </span>
						            </label>
						            <div class="col-sm-9">
						                <select class="form-control" id="id_producto" name="id_producto" data-live-search="true" required>
						                    <option value="0" selected>Selecciona un Opcion</option>
						                    @foreach($products as $prod)
				                            <option value="{{$prod->id}}_{{$prod->stock}}_{{$prod->precio_venta}}">{{$prod->producto}}</option> 
				                            @endforeach
						                </select>
						            </div>
						        </div> 
						        <br>   
						        <div class="col-sm-12 row"style="justify-content: center;">
							        <label class="col-md-9">Cantidad
							            <span class="required"> * </span>
							        </label>
							        <div class="col-md-9">
							            <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="Ingrese cantidad" pattern="[0-9]{0,15}">
							        </div>
							    </div> 
						        <br>
						        <div class="col-sm-12 row"style="justify-content: center;">
							        <label class="col-md-9">Stock
							            <span class="required"> * </span>
							        </label>
							        <div class="col-md-9">
							            <input type="number" id="stock" name="stock" class="form-control" pattern="[0-9]{0,20}" placeholder="Ingrese cantidad" disabled>
							        </div>
							    </div> 
						        <br>
							    <div class="col-sm-12 row"style="justify-content: center;">
							        <label class="col-md-9">Precio
							            <span class="required"> * </span>
							        </label>
							        <div class="col-md-9">
							            <input type="number" id="precio_venta" name="precio_venta" class="form-control" placeholder="Ingrese precio de compra" disabled > 
							        </div>
							    </div> 
							    <br>
							    <div class="col-sm-12 row"style="justify-content: center;">
							        <label class="col-md-9">Descuento
							            <span class="required"> * </span>
							        </label>
							        <div class="col-md-9">
							            <input type="number" id="descuento" name="descuento" class="form-control" placeholder="Ingrese precio de compra" pattern="[0-9]{0,15}"> 
							        </div>
							    </div>                                      
							</div>
							<hr>
							<div class="form-group row" style="justify-content: center;">
							    <div class="col-sm12" >
							        <button type="button" id="agregar2" class="btn btn-default btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success">
							            <i class="fa fa-times"></i>
							            Agregar Producto
							        </button>
							    </div>
							</div>
	                    </div>
                    </div>
                </div>
        	</div>


            <div class="col-sm-8 col-md-7">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Lista de Ventas</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        
                        <table id="detalles" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Borrar</th>
			                        <th>Producto</th>
			                        <th>Precio(Bs.)</th> 
			                        <th>Descuento</th>
			                        <th>Cantidad</th>
			                        <th>SubTotal (Bs.)</th>
                                </tr>
                            </thead>
                            <tfoot>
			                    <tr>
			                        <th  colspan="5"><p align="right">TOTAL:</p></th>
			                        <th><p align="right"><span id="total">0.00 (Bs.)</span> </p></th>
			                    </tr>
			                    <tr>
			                        <th colspan="5"><p align="right">TOTAL IMPUESTO (20%):</p></th>
			                        <th><p align="right"><span id="total_impuesto">0.00 (Bs.)</span></p></th>
			                    </tr>
			                    <tr>
			                        <th  colspan="5"><p align="right">TOTAL PAGAR:</p></th>
			                        <th><p align="right"><span align="right" id="total_pagar_html">0.00 (Bs.)</span> <input type="hidden" name="total_pagar" id="total_pagar"></p></th>
			                    </tr>
			                </tfoot>
                            <tbody>
                            </tbody>
                        </table>

						<div class="form-group" id="guardar2">
						    <div class="offset-md-3">
						    	<input type="hidden" name="_token" value="{{csrf_token()}}">
						        <button type="submit" class="btn btn-default btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success">
						            <i class="fa fa-times"></i>
						            Guardar
						        </button>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    	</form>
    </div>
</div>


@endsection