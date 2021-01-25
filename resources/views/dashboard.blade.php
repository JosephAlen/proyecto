<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="Responsive Admin Template" />
        <meta name="author" content="UltimateAdmin" />
        <title>GUTI | Tienda Deportiva</title>
        <!-- google font -->
        <!--
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
        -->
    	<!-- icons -->
        <link href="{{asset('assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <!--bootstrap -->
        <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
        <!-- Material Design Lite CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/material/material.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
        <!-- animation -->
        <link href="{{asset('assets/css/pages/animate_page.css')}}" rel="stylesheet">
        <!-- inbox style -->
        <link href="{{asset('assets/css/pages/inbox.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Theme Styles -->
        <link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" /> 
        <!-- datatables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <link rel="preload" as="script" href="decoder.js">

    </head>

    @if(Auth::check())
        @if (Auth::user()->id_roles == 1)
            <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md logo-red header-red white-sidebar-color">
        @elseif (Auth::user()->id_roles == 2)
            <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width logo-red header-red white-sidebar-color">
        @else
        @endif
    @endif

        <div class="page-wrapper">
            @include('home.header')
            <!-- configuracion tema archivo : settings-->
            <!--@include('home.settings')-->
            <!-- start page container -->
            <div class="page-container">
            @if(Auth::check())
                @if (Auth::user()->id_roles == 1)
                    @include('home.menu')
                @elseif (Auth::user()->id_roles == 2)
                    
                @else
                @endif
            @endif
                
                @yield('container')
                <!-- configuracion chat archivo : char-->
            </div>
            <!-- end -->
            @include('home.footer')
        </div>
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}" ></script>
        <script src="{{asset('assets/plugins/popper/popper.min.js')}}" ></script>
        <script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.min.js')}}" ></script>
        <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
        <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}" ></script>
        <script src="{{asset('assets/js/pages/sparkline/sparkline-data.js')}}" ></script>
        <!-- Common js-->
        <script src="{{asset('assets/js/app.js')}}" ></script>
        <script src="{{asset('assets/js/layout.js')}}" ></script>
        <script src="{{asset('assets/js/theme-color.js')}}" ></script>
        <!-- material -->
        <script src="{{asset('assets/plugins/material/material.min.js')}}"></script>
        <!-- animation -->
        <script src="{{asset('assets/js/pages/ui/animations.js')}}" ></script>
        <!-- chart js -->
        <script src="{{asset('assets/plugins/chart-js/Chart.bundle.js')}}" ></script>
        <script src="{{asset('assets/plugins/chart-js/utils.js')}}" ></script>
        <script src="{{asset('assets/js/pages/chart/chartjs/home-data.js')}}" ></script>
        <!-- summernote -->
        <script src="{{asset('assets/plugins/summernote/summernote.min.js')}}" ></script>
        <script src="{{asset('assets/js/pages/summernote/summernote-data.js')}}" ></script>
        <!-- datatables -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

        <script src="assets/js/pages/chart/chartjs/chartjs-data.js" ></script>


        <script>
            if (location.hostname !== "localhost") 
            {
                (function (i, s, o, g, r, a, m) 
                {
                    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () 
                    {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'pageview');
            }
        </script>
        <script async src="https://cdn.jsdelivr.net/npm/pwacompat@2.0.6/pwacompat.min.js" integrity="sha384-GOaSLecPIMCJksN83HLuYf9FToOiQ2Df0+0ntv7ey8zjUHESXhthwvq9hXAZTifA" crossorigin="anonymous"></script>
        <script type="text/javascript" src="main.c130be0bc942aca5e7b8.bundle.js"></script>

        <!--
        <script src="jsqrscanner.nocache.js"></script>

        <script type="text/javascript">
            function onQRCodeScanned(scannedText)
            {
                var scannedTextMemo = document.getElementById("scannedTextMemo");
                if(scannedTextMemo)
                {
                    scannedTextMemo.value = scannedText;
                }
            }
            function JsQRScannerReady()
            {
                var jbScanner = new JsQRScanner(onQRCodeScanned);
                jbScanner.setSnapImageMaxSize(300);
                var scannerParentElement = document.getElementById("scanner");
                if(scannerParentElement)
                {
                    jbScanner.appendTo(scannerParentElement);
                }        
            }
          </script> 
          --> 
    
        <!--scan-->
        <!--
        <script src="instascan.min.js"></script>

        <script>
            var qr = new Instascan.Scanner(
            {
            video: document.getElementById("qrcam")
            });
            qr.addListener('scan', function(data)
            {
            console.log(data);
            });
            Instascan.Camera.getCameras().then(function(cams)
            {
                qr.start(cams[0]);
            }).catch(function(err)
            {
                console.log(err);
            });

        </script>-->
    <script>
        /*$(document).ready(function()
        {
            $('.app__dialog-open').click();
        });*/

    </script>

        <script>      
            function recibir() 
            { 
                var valor = document.getElementById("result").value;
                /*document.getElementById("txt").innerHTML=valor;*/
                if (valor.length == 0) 
                {
                    alert('QR NO ESNCONTRADO');
                    return false;
                }
                else
                {
                    window.open(valor);
                }
            }
            document.getElementsByClassName("qrqr").addEventListener('click', function(e)
            {
                newButton_Click(document.getElementsByClassName("qrq"),e)
            })
        </script>
        <script>
            $('#editmodalm').on('show.bs.modal', function(event)
                {
                    var button = $(event.relatedTarget)
                    var editar_modal = button.data('name')
                    var descripcion_modal = button.data('description')
                    var id_modal = button.data('id')
                    var modal = $(this)

                    modal.find('.modal-body #name').val(editar_modal);
                    modal.find('.modal-body #description').val(descripcion_modal);
                    modal.find('.modal-body #id').val(id_modal);
                })
            $('#estadomodal1').on('show.bs.modal', function(event)
            {
                var button = $(event.relatedTarget)
                var id_modal = button.data('id')
                var modal = $(this)
                modal.find('.modal-body #id').val(id_modal);
            })
            $('#estadomodal2').on('show.bs.modal', function(event)
            {
                var button = $(event.relatedTarget)
                var id_modal = button.data('id')
                var modal = $(this)
                modal.find('.modal-body #id').val(id_modal);
            })
            $('#editmodalp').on('show.bs.modal', function(event)
                {
                    var button = $(event.relatedTarget)

                    var name_pro = button.data('name')
                    var descripcion_pro = button.data('code')
                    var size_pro = button.data('size')
                    var colour_size = button.data('colour')
                    var stock_pro = button.data('stock')
                    var sale_pro = button.data('sale_price')
                    var des_pro = button.data('description')
                    var mode_pro = button.data('namem')

                    var id_modal_pro = button.data('id')

                    var modal = $(this)

                    modal.find('.modal-bodyy #name').val(name_pro);
                    modal.find('.modal-bodyy #code').val(descripcion_pro);
                    modal.find('.modal-bodyy #size').val(size_pro);
                    modal.find('.modal-bodyy #colour').val(colour_size);
                    modal.find('.modal-bodyy #stock').val(stock_pro);
                    modal.find('.modal-bodyy #sale_price').val(sale_pro);
                    modal.find('.modal-bodyy #description').val(des_pro);
                    modal.find('.modal-bodyy #id_models').val(mode_pro);

                    modal.find('.modal-bodyy #id').val(id_modal_pro);
                })
            $('#editmodalproveedor').on('show.bs.modal', function(event)
                {
                    var button = $(event.relatedTarget)

                    var name_provider = button.data('name')
                    var document_provider = button.data('document')
                    var nro_documnt_provider = button.data('nro_document')
                    var address_provider = button.data('address')
                    var telephone_provider = button.data('telephone')
                    var email_provider = button.data('email')
                    var id_provider = button.data('id')
                    var modal = $(this)

                    modal.find('.modal-body #name').val(name_provider);
                    modal.find('.modal-body #document').val(document_provider);
                    modal.find('.modal-body #nro_document').val(nro_documnt_provider);
                    modal.find('.modal-body #address').val(address_provider);
                    modal.find('.modal-body #telephone').val(telephone_provider);
                    modal.find('.modal-body #email').val(email_provider);
                    modal.find('.modal-body #id').val(id_provider);
                })
            $('#editmodalclient').on('show.bs.modal', function(event)
                {
                    var button = $(event.relatedTarget)

                    var name_provider = button.data('name')
                    var document_provider = button.data('document')
                    var nro_documnt_provider = button.data('nro_document')
                    var address_provider = button.data('address')
                    var telephone_provider = button.data('telephone')
                    var email_provider = button.data('email')
                    var id_provider = button.data('id')
                    var modal = $(this)

                    modal.find('.modal-body #name').val(name_provider);
                    modal.find('.modal-body #document').val(document_provider);
                    modal.find('.modal-body #nro_document').val(nro_documnt_provider);
                    modal.find('.modal-body #address').val(address_provider);
                    modal.find('.modal-body #telephone').val(telephone_provider);
                    modal.find('.modal-body #email').val(email_provider);
                    modal.find('.modal-body #id').val(id_provider);
                })
            $('#editmodaluser').on('show.bs.modal', function(event)
                {
                    var button = $(event.relatedTarget)

                    var name_user = button.data('name')
                    var document_user = button.data('document')
                    var nro_document_user = button.data('nro_document')
                    var address_user = button.data('address')
                    var telephone_user = button.data('telephone')
                    var email_user = button.data('email')
                    var roles_user = button.data('id_roles')
                    var user_user = button.data('muser')

                    var id_userr = button.data('id')

                    var modal = $(this)

                    modal.find('.modal-bodyy #name').val(name_user);
                    modal.find('.modal-bodyy #document').val(document_user);
                    modal.find('.modal-bodyy #nro_document').val(nro_document_user);
                    modal.find('.modal-bodyy #address').val(address_user);
                    modal.find('.modal-bodyy #telephone').val(telephone_user);
                    modal.find('.modal-bodyy #email').val(email_user);
                    modal.find('.modal-bodyy #id_roles').val(roles_user);
                    modal.find('.modal-bodyy #user').val(user_user);

                    modal.find('.modal-bodyy #id').val(id_userr);
                })

            $('#cambiarEstadoCompra').on('show.bs.modal', function (event) 
                {
                   var button = $(event.relatedTarget) 
                   var id_compra = button.data('id')
                   var modal = $(this)
                   modal.find('.modal-body #id').val(id_compra);
                })
        </script>
        <script>
            $(document).ready(function()
            {
                $("#agregar").click(function()
                {
                    agregar();
                });
            });
            var cont=0;
            total=0;
            subtotal=[];
            $("#guardar").hide();
            function agregar()
            {
                id_producto= $("#id_producto").val();
                producto= $("#id_producto option:selected").text();
                cantidad= $("#cantidad").val();
                precio_compra= $("#precio_compra").val();
                impuesto=20;
                if(id_producto !="" && cantidad!="" && cantidad>0 && precio_compra!="")
                {
                    subtotal[cont]=cantidad*precio_compra;
                    total= total+subtotal[cont];
                    var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect btn-danger" onclick="eliminar('+cont+');"><i class="fa fa-times fa-2x"></i></button></td> <td><input type="hidden" name="id_producto[]" value="'+id_producto+'">'+producto+'</td> <td><input type="number" id="precio_compra[]" name="precio_compra[]"  value="'+precio_compra+'"> </td>  <td><input type="number" name="cantidad[]" value="'+cantidad+'"> </td> <td>$'+subtotal[cont]+' </td></tr>';
                    cont++;
                    limpiar();
                    totales();
                    evaluar();
                    $('#detalles').append(fila);
                }
                else
                {
                    Swal.fire(
                    {
                        type: 'error',
                        text: 'Rellene todos los campos.',
                    })
                }
            }
            function limpiar()
            {
                $("#cantidad").val("");
                $("#precio_compra").val("");
            }
            function totales()
            {
                $("#total").html("USD$ " + total.toFixed(2));
                total_impuesto=total*impuesto/100;
                total_pagar=total+total_impuesto;
                $("#total_impuesto").html("USD$ " + total_impuesto.toFixed(2));
                $("#total_pagar_html").html("USD$ " + total_pagar.toFixed(2));
                $("#total_pagar").val(total_pagar.toFixed(2));
            }
            function evaluar()
            {
                if(total>0)
                {
                    $("#guardar").show();
                } 
                else
                {
                    $("#guardar").hide();
                }
            }
            function eliminar(index)
            {
                total=total-subtotal[index];
                total_impuesto= total*20/100;
                total_pagar_html = total + total_impuesto;
                $("#total").html("USD$" + total);
                $("#total_impuesto").html("USD$" + total_impuesto);
                $("#total_pagar_html").html("USD$" + total_pagar_html);
                $("#total_pagar").val(total_pagar_html.toFixed(2));
                $("#fila" + index).remove();
                evaluar();
            }
        </script>
        <script>
            $(document).ready(function()
            {
                $("#agregar2").click(function()
                {
                    agregar2();
                });
            });
            var cont=0;
            total=0;
            subtotal=[];
            $("#guardar2").hide();
            $("#id_producto").change(mostrarValores2);

            function mostrarValores2()
            {
                datosProducto = document.getElementById('id_producto').value.split('_');
                $("#precio_venta").val(datosProducto[2]);
                $("#stock").val(datosProducto[1]);
            }

            function agregar2()
            {
                datosProducto = document.getElementById('id_producto').value.split('_');
                id_producto= datosProducto[0];
                producto= $("#id_producto option:selected").text();
                cantidad= $("#cantidad").val();
                descuento= $("#descuento").val();
                precio_venta= $("#precio_venta").val();
                stock= $("#stock").val();
                impuesto=20;
                if(id_producto !="" && cantidad!="" && cantidad>0  && descuento!="" /*&& precio_venta!=""*/)
                {
                    if(parseInt(stock)>=parseInt(cantidad))
                    {
                        subtotal[cont]=(cantidad*precio_venta)-(cantidad*precio_venta*descuento/100);
                        total= total+subtotal[cont];
                        var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times fa-2x"></i></button></td> <td><input type="hidden" name="id_producto[]" value="'+id_producto+'">'+producto+'</td> <td><input type="number" name="precio_venta[]" value="'+parseFloat(precio_venta).toFixed(2)+'"> </td> <td><input type="number" name="descuento[]" value="'+parseFloat(descuento).toFixed(2)+'"> </td> <td><input type="number" name="cantidad[]" value="'+cantidad+'"> </td> <td>$'+parseFloat(subtotal[cont]).toFixed(2)+'</td></tr>';
                        cont++;
                        limpiar2();
                        totales2();  
                        evaluar2();
                        $('#detalles').append(fila);
                    } 
                    else
                    {
                        Swal.fire(
                        {
                            type: 'error',
                            text: 'La cantidad a vender supera el stock',
                        })
                    }
                }
                else
                {
                    Swal.fire(
                    {
                        type: 'error',
                        text: 'Rellene todos los campos del detalle de la venta',
                    })
                }
            }
            function limpiar2()
            {
                $("#cantidad").val("");
                $("#descuento").val("0");
                $("#precio_venta").val("");
            }
            function totales2()
            {
                $("#total").html("(Bs.) " + total.toFixed(2));
                total_impuesto=total*impuesto/100;
                total_pagar=total+total_impuesto;
                $("#total_impuesto").html("(Bs.) " + total_impuesto.toFixed(2));
                $("#total_pagar_html").html("(Bs.) " + total_pagar.toFixed(2));
                $("#total_pagar").val(total_pagar.toFixed(2));
            }
            function evaluar2()
            {
                if(total>0)
                {
                    $("#guardar2").show();
                } 
                else
                {
                    $("#guardar2").hide();
                }
            }
            function eliminar2(index)
            {
                total=total-subtotal[index];
                total_impuesto= total*20/100;
                total_pagar_html = total + total_impuesto;
                $("#total").html("(Bs.)" + total);
                $("#total_impuesto").html("(Bs.)" + total_impuesto);
                $("#total_pagar_html").html("(Bs.)" + total_pagar_html);
                $("#total_pagar").val(total_pagar_html.toFixed(2));
                $("#fila" + index).remove();
                evaluar2();
            }
        </script>
<!--
        <script>
            let scanner = new Instascan.Scanner(
            { 
                video: document.getElementById('preview') 
            });
            scanner.addListener('scan', function (content) 
            {
                console.log(content);
            });
            Instascan.Camera.getCameras().then(function (cameras) 
            {
                if (cameras.length > 0) 
                {
                    scanner.start(cameras[0]);
                } 
                else 
                {
                    console.error('No existen camaras.');
                }
            }).catch(function (e) 
            {
                console.error(e);
            });
        </script>
-->

        <!--chart-->
        <script>
        $(document).ready(function() 
        {
            var MONTHS = ["mes"];
            var config = {
                type: 'line',
                data: {
                    labels: ["totalmes"],
                    datasets: [{
                        label: "Vendedores",
                        backgroundColor: window.chartColors.red,
                        borderColor: window.chartColors.red,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ],
                        fill: false,
                    }]
                },
                options: {
                    responsive: true,
                    title:{
                        display:true,
                        text:'Chart Survey'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Students'
                            }
                        }]
                    }
                }
            };
            var ctx = document.getElementById("mychart").getContext("2d");
            window.myLine = new Chart(ctx, config);
            });
    </script>   




    </body>
</html>