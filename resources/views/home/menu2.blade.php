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
</div>
<!-- end sidebar menu --> 