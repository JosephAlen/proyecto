@extends('dashboard')
@section('container')


<div class="page-content-wrapper">
    <div class="page-content">
      <div class="row">
          <div class="col-sm-12">
            <div class="card card-box">
<main class="main">

 <div class="card-body">

  <h2 class="text-center">Detalle de Venta</h2><br/><br/><br/>

    
            <div class="form-group row">

                    <div class="col-md-4">  

                        <label class="form-control-label" for="nombre">Cliente</label>
                        
                        <p>{{$venta->name}}</p>
                            
                    </div>

                    <div class="col-md-4">  

                    <label class="form-control-label" for="documento">Documento</label>

                    <p>{{$venta->document}}</p>
                    
                    </div>

                    <div class="col-md-4">
                            <label class="form-control-label" for="num_venta">Número Venta</label>
                            
                            <p>{{$venta->num_sales}}</p>
                    </div>

            </div>

            
            <br/><br/>

           <div class="form-group row border">

              <h3>Detalle de Ventas</h3>

              <div class="table-responsive col-md-12">
                <table id="detalles" class="table table-bordered table-striped table-sm">
                <thead>
                    <tr class="bg-success">

                        <th>Producto</th>
                        <th>Precio Venta (Bs.)</th>
                        <th>Descuento (Bs.)</th>
                        <th>Cantidad</th>
                        <th>SubTotal (Bs.)</th>
                    </tr>
                </thead>
                 
                <tfoot>
                   
                   <!--<th><h2>TOTAL</h2></th>
                   <th></th>
                   <th></th>
                   <th></th>
                   <th><h4 id="total">{{$venta->total}}</h4></th>-->
                   <tr>
                        <th  colspan="4"><p align="right">TOTAL:</p></th>
                        <th><p align="right">${{number_format($venta->total,2)}}</p></th>
                    </tr>

                    <tr>
                        <th colspan="4"><p align="right">TOTAL IMPUESTO (20%):</p></th>
                        <th><p align="right">${{number_format($venta->total*20/100,2)}}</p></th>
                    </tr>

                    <tr>
                        <th  colspan="4"><p align="right">TOTAL PAGAR:</p></th>
                        <th><p align="right">${{number_format($venta->total+($venta->total*20/100),2)}}</p></th>
                    </tr>  
                </tfoot>

                <tbody>
                   
                   @foreach($detalles as $det)

                    <tr>
                     
                      <td>{{$det->pdname}}</td>
                      <td>${{$det->price}}</td>
                      <td>{{$det->discount}}</td>
                      <td>{{$det->quantity}}</td>
                      <td>${{number_format($det->quantity*$det->price - $det->quantity*$det->price*$det->discount/100,2)}}</td>
                    
                    
                    </tr> 


                   @endforeach
                   
                </tbody>
                
                
                </table>
              </div>
            
            </div>


    </div><!--fin del div card body-->
  </main>
</div>
</div>
</div>
</div></div>

@endsection