@extends('layouts.app')

@section('content-title')

    @if(session('status'))
        <script>
            Swal.fire(
                'Mensaje!',
                `{{ session('status') }}`,
                'success'
            )
        </script>
    @endif

    <div class="pad-all mar-btm text-center">
        <h2>Productos</h2>
        <p>Lista de Productos</p>

        <div class="text-left" style="margin-left: 10px;">
            <button class="btn btn-default" style="color: blue;" id="nuevo-producto"><i class="ion-plus"></i> Agregar Producto</button>
        </div> 
    </div> 

@endsection

@section('content')
<!-- start page content -->

<!-- end page content -->

    <div class="panel">
        {{-- <div class="panel-heading">
            <h3 class="panel-title">Sample Toolbar</h3>
        </div> --}}
    
        <!--Data Table-->
        <!--===================================================-->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Producto</th>
                            <th>Modelo</th>
                            <th>Descripción</th>
                            <th>Color</th>
                            <th>Responsable</th>
                            <th class="text-center">Estado Producto</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td align="center">{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->colour }}</td>
                                <td>{{ $product->responsable }}</td>
                                <td class="text-center">{{ $product->state }}</td>
                                <td class="text-center">
                                    <div class="label label-table label-{{ $product->switch?'success':'danger' }}">
                                        {{ $product->switch?'Activo':'Inactivo' }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button data-toggle="modal" class="btn btn-info btn-sm view-product" data-img="{{ $product->image }}">
                                        <i class="ion-eye"></i>
                                    </button>
                                    <a href="{{route('print.product',$product->id)}}" target="_blank">
                                        <button class="btn btn-warning btn-sm">
                                            <i class="ion-printer"></i>
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-sm edit-product" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-code="{{ $product->code }}" data-colour="{{ $product->colour }}" data-brand="{{ $product->brand }}" data-model="{{ $product->model }}" data-serial="{{ $product->serial }}" data-description="{{ $product->description }}" data-state="{{ $product->state }}" data-image="{{ $product->image }}" data-responsable="{{ $product->responsable }}">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                    <a href="{{ route('state.product', $product->id) }}">
                                        <button type="submit" class="btn btn-{{ $product->switch?'danger':'success' }} btn-sm" data-toggle="tooltip" data-placement="top">
                                            <i class="{{ $product->switch?'ion-close':'ion-checkmark-round' }}"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--===================================================-->
        <!--End Data Table-->
    
    </div>
    

   <!--Small Bootstrap Modal-->
    <!--===================================================-->
    <div id="view-image" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="mySmallModalLabel">Imagen Producto</h4>
                </div>
                <div class="modal-body text-center">
                    <img id="img-view" width="60%">
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Small Bootstrap Modal-->


   <!--Modal Registrar Producto-->
    <!--===================================================-->
    <div id="register-product" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                        <h4 class="modal-title" id="title">Nuevo Producto</h4>
                    </div>

                    <form action="{{ route('store.product') }}" method="POST" id="form-product" enctype="multipart/form-data">
                        @csrf
                        <div id="csrf"></div>
                        <div class="modal-body">
                        <div class="form-group row" style="justify-content: center;">
                                <div class="col-sm-6 row">
                                    <label class="control-label col-sm-3" for="name">Producto
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Introduzca el nombre..." required pattern="^[a-zA-Zñ\s]{0,50}$"> 
                                    </div>
                                </div>
                                <div class="col-sm-6 row">
                                    <label class="control-label col-sm-3" for="code">Codigo
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="code" id="code" class="form-control" placeholder="Introduzca el codigo..." required> 
                                    </div>
                                </div>
                        </div>
                        <br>
                        <div class="form-group row" style="justify-content: center;">

                            <div class="col-sm-6 row">
                                <label class="control-label col-sm-3" for="namem">Modelo
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="model" class="form-control" id="model" placeholder="Introducir Modelo" required="">
                                </div>
                            </div>

                            <div class="col-sm-6 row">
                                <label class="control-label col-sm-3" for="colour">Color
                                </label>
                                <div class="col-sm-9"> 
                                    <select class="form-control" name="colour" id="colour">              
                                        <option value="0" disabled>Seleccione una opcion</option>
                                        <option value="NEGRO">NEGRO</option>
                                        <option value="CAFE">CAFE</option>
                                        <option value="ROJO">ROJO</option>
                                        <option value="VERDE">VERDE</option>
                                        <option value="BLANCO">BLANCO</option>
                                        <option value="BLANCO">AMARILLO</option>
                                        <option value="BLANCO">AMARILLO/NEGRO</option>
                                        <option value="BLANCO">ROJO/NEGRO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" style="justify-content: center;">
                            <div class="col-sm-6 row">
                                <label class="control-label col-sm-3" for="serial">Serial
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="serial" id="serial" class="form-control" placeholder="Introduzca el Serial..." required > 
                                </div>
                            </div>
                            <div class="col-sm-6 row">
                                <label class="control-label col-sm-3" for="brand">Marca
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="brand" id="brand" class="form-control" placeholder="Introduzca la Marca..."> 
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" style="justify-content: center;">
                            <div class="col-sm-6 row">
                                <label class="control-label col-md-3" for="responsable">Responsable
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="responsable" id="responsable" class="form-control" placeholder="Responsable..." required> 
                                </div>
                            </div>
                            <div class="col-sm-6 row">
                                <label class="control-label col-md-3" for="estado">Estado
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado..." required> 
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Imagen</label>
                            <div class="col-md-9">
                                <input type="file" name="image" id="image" class="note-image-input form-control note-form-control note-input"> 
                            </div>
                        </div> 
                        <br>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Descripcion</label>
                            <div class="col-md-9">
                                <input type="text" name="description" id="description" class="form-control" placeholder="Introduzca una descripcion..."> 
                            </div>
                        </div> 
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" type="button">Cancelar</button>
                        <button class="btn btn-primary" id="save" type="submit">Guardar</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Small Bootstrap Modal-->

    
    <script>
        $(".view-product").on('click', function(){
            let data = $(this).data('img');
            $("#img-view").attr("src","storage/img/"+data);

            $('#view-image').modal('show');
            //alert(paso);
        });

        $('#nuevo-producto').on('click', function(){
            $('#csrf').html("");
            $('#title').html('Nuevo Producto');
            $('#form-product').attr('action',"{{ route('store.product') }}");
            $("#form-product")[0].reset();
            $('#save').html("Guardar");
            $('#register-product').modal('show');
        });

        $('.edit-product').on('click', function(){
            $('#csrf').html(`@method('PUT')`);
            $('#title').html('Actualizar Producto');
            $('#form-product').attr('action',`{{ url('/producto/actualizar') }}/`+$(this).data('id'));
            let name = $(this).data('name');
            let code = $(this).data('code');
            let colour = $(this).data('colour');
            let brand = $(this).data('brand');
            let model = $(this).data('model');
            let serial = $(this).data('serial');
            let description = $(this).data('description');
            let state = $(this).data('state');
            let image = $(this).data('image');
            let responsable = $(this).data('responsable');

            $('#name').val(name);
            $('#code').val(code);
            $('#brand').val(brand);
            $('#model').val(model);
            $('#serial').val(serial);
            $('#description').val(description);
            $('#estado').val(state);
            $('#responsable').val(responsable);
            
            $('#save').html("Actualizar");
            
            $('#register-product').modal('show'); 
        });

    </script>

@endsection
