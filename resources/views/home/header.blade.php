<!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="">
                    <span class="logo-default" >
                        <img src="img/logo.png" alt="" width="120" height="70" style="margin-top: -14px; margin-left: 25px; justify-content: center;">
                    </span> </a>
                </div>
                <!-- logo end -->
                @if(Auth::check())
                    @if (Auth::user()->id_roles == 1)
                        <ul class="nav navbar-nav navbar-left in">
                            <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                        </ul>
                    @elseif (Auth::user()->id_roles == 2)

                    @else
                    @endif
                @endif

                <!--
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                -->
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">                        
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="{{asset('storage/img/'.Auth::user()->image)}}" height="50" width="50" />
                                <span class="username username-hide-on-mobile"> {{Auth::user()->user}} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                
                                <li>
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i> Cerrar Sesion 
                                    </a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                        {{ csrf_field() }} 
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                    </ul>
                </div>
            </div>

            @if(Auth::check())
                @if (Auth::user()->id_roles == 1)

                @elseif (Auth::user()->id_roles == 2)

            <div class="navbar-custom">
                <div class="hor-menu hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <li class="mega-menu-dropdown">
                    <a href="{{url('consulta')}}" class="nav-link nav-toggle" onclick="event.preventDefault(); document.getElementById('consult-form').submit();"> <i class="material-icons">storage</i>
                        <span class="title"style="font-size: 18px;">Consulta</span> 
                    </a>
                    <form id="consult-form" action="{{url('consulta')}}" method="GET" style="display: none;">
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
                    </ul>
                </div>
            </div>


                @else
                @endif
            @endif            

        </div>
        <!-- end header -->