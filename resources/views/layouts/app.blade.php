<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Activos Fijos</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{!! asset('assets/template/css/bootstrap.min.css') !!}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{!! asset('assets/template/css/nifty.min.css') !!}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{!! asset('assets/template/css/demo/nifty-demo-icons.min.css') !!}" rel="stylesheet">


    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{!! asset('assets/template/plugins/pace/pace.min.css') !!}" rel="stylesheet">
    <script src="{!! asset('assets/template/plugins/pace/pace.min.js') !!}"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{!! asset('assets/template/css/demo/nifty-demo.min.css') !!}" rel="stylesheet">
      
    <!--Ion Icons [ OPTIONAL ]-->
    <link href="{!! asset('assets/template/plugins/ionicons/css/ionicons.min.css') !!}" rel="stylesheet">   

     {{-- Uso de Jquery --}}
    <script src="{!! asset('assets/jquery/jquery.min.js')!!}"></script>
    {{-- Sweet Alerts --}}
    <script type="text/javascript" src="{!! asset('assets/js/sweetAlert.js') !!}"></script>
        
</head>
<body>

    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        @include('layouts.navbar')
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    @yield('content-title')               
                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
                    @yield('content')
                    
                    
                    
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    @include('layouts.sidebar')
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        @include('layouts.footer')        
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="{!! asset('assets/template/js/jquery.min.js') !!}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{!! asset('assets/template/js/bootstrap.min.js') !!}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{!! asset('assets/template/js/nifty.min.js') !!}"></script>




    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{!! asset('assets/template/js/demo/nifty-demo.min.js') !!}"></script>

    
    <!--Icons [ SAMPLE ]-->
    <script src="{!! asset('assets/template/js/demo/icons.js') !!}"></script>

</body>
</html>
