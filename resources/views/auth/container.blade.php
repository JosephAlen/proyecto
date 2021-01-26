<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DTMU | Activos Fijos</title>


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

     <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{!! asset('assets/template/plugins/pace/pace.min.css') !!}" rel="stylesheet">
    <script src="{!! asset('assets/template/plugins/pace/pace.min.js') !!}"></script>
        
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{!! asset('assets/template/css/demo/nifty-demo.min.css') !!}" rel="stylesheet">
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container" style="display: flex; justify-content: center; margin-top: 50px; ">
        
        <!-- BACKGROUND IMAGE -->
        <!--===================================================-->
        <div id="bg-overlay"></div>
        
        
        <!-- LOGIN FORM -->
        <!--===================================================-->
        @yield('auth')
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
    
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="{!! asset('assets/template/js/demo/bg-images.js') !!}"></script>

</body>
</html>
