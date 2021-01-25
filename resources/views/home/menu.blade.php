<!-- start sidebar menu -->
	<div class="sidebar-container">
		<div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel" style="width: 100%;">
                        <div class="pull-left">
                            <img src="{{asset('storage/img/'.Auth::user()->image)}}" class="img-circle" alt="User Image" width="100" height="100" />
                        </div>
                        <div class="pull-left info" style="width: 80px; text-align: center;">
                            <h4> {{Auth::user()->user}} </h4>
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> En linea</span></a>
                        </div>
                    </div>
                </li>

                <li class="nav-item" >
                    <a href="{{url('home')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('home-form').submit();"> <i class="material-icons">desktop_windows</i>
                    <span class="title" style="font-size: 18px;">Inicio</span> 
                    </a>
                    <form id="home-form" action="{{url('home')}}" method="GET" style="display: none;">
                        {{csrf_field()}} 
                    </form>
                </li>
                

                <li class="nav-item">
                    <a href="{{url('user')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('user-form').submit();"> 
                        <i class="material-icons">account_circle</i>
                        <span class="title"style="font-size: 18px;">Usuarios</span> 
                    </a>
                    <form id="user-form" action="{{url('user')}}" method="GET" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </li>
                <li class="nav-item">
                    <a href="{{url('models')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('models-form').submit();"> <i class="material-icons">style</i>
                        <span class="title"style="font-size: 18px;">Modelos</span> 
                    </a>
                    <form id="models-form" action="{{url('models')}}" method="GET" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </li>
                <li class="nav-item">
                    <a href="{{url('product')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('product-form').submit();"> <i class="material-icons">storage</i>
                        <span class="title"style="font-size: 18px;">Productos</span> 
                    </a>
                    <form id="product-form" action="{{url('product')}}" method="GET" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </li>
                <li class="nav-item">
                    <a href="{{url('provider')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('provider-form').submit();"> <i class="material-icons">local_shipping</i>
                        <span class="title"style="font-size: 18px;">Proveedores</span> 
                    </a>
                    <form id="provider-form" action="{{url('provider')}}" method="GET" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </li>
                <li class="nav-item">
                    <a href="{{url('client')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('client-form').submit();"> <i class="material-icons">group</i>
                        <span class="title"style="font-size: 18px;">Clientes</span> 
                    </a>
                    <form id="client-form" action="{{url('client')}}" method="GET" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </li>
                <li class="nav-item">
                    <a href="{{url('sale')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('sale-form').submit();"> <i class="material-icons">local_grocery_store</i>
                        <span class="title"style="font-size: 18px;">Ventas</span> 
                    </a>
                    <form id="sale-form" action="{{url('sale')}}" method="GET" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </li>
                <li class="nav-item">
                    <a href="{{url('purchase')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('purchase-form').submit();"> <i class="material-icons">shop</i>
                        <span class="title"style="font-size: 18px;">Compras</span> 
                    </a>
                    <form id="purchase-form" action="{{url('purchase')}}" method="GET" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu --> 