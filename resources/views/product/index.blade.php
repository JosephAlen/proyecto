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
        <h2>Consultas</h2>
        <p>Buscar Productos</p>
    </div> 

@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="app__layout">
                        <!-- Header -->
                        <main class="app__layout-content">
                            <div style="display: flex; justify-content: center;">
                                <video id="visualizar" style="width: 400px; margin-top: 20px; border-style: solid; border-width: 5px; border-radius: 10px;"></video>
                            </div>
                        </main>
                    </div>
                    <!--<div class="app__select-photos" ></div>-->
                </div>
            </div>
        </div>
    </div>
</div>


<div id="qr-product" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title" id="mySmallModalLabel">Detalle del Producto</h4>
            </div>
            <div class="modal-body text-center">
                <div class="form-group row" style="justify-content: center;">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div>
                            <b>Producto: </b> <p id="product"></p>
                        </div>
                        <div>
                            <b>Codigo: </b> <p id="code"></p>
                        </div>
                        <div>
                            <b>Responsable: </b> <p id="responsable"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <b>Imagen: </b>
                        </div>
                        <img id="img-view" width="60%">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script>

    var scanner = new Instascan.Scanner({
       video: document.getElementById('visualizar'),
       scanPeriod:2,
       mirror: false
    });

    Instascan.Camera.getCameras().then(function(cameras){
      if(cameras.length>0){
         scanner.start(cameras[0]);
      }else{
         console.log("No se encontro camaras");
         alert("no se encontro camara");
      }
    }).catch(function(e){
      console.log(e);
      alert("Error:"+e);
    });

    // Lectura Qr
    scanner.addListener('scan', function(res){
       console.log("Contenido:"+res);
        $.ajax({
            url: res,
            headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            method: "GET",
            success: function(data){
                $('#product').html(data.name);
                $('#code').html(data.code);
                $('#responsable').html(data.responsable);
                $("#img-view").attr("src", "../storage/img/" + data.image);
                $('#qr-product').modal('show');
            }
        });
    });

</script>

@endsection