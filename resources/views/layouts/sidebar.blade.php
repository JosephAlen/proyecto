<div id="mainnav-menu-wrap">
    <div class="nano">
        <div class="nano-content">

            <!--Profile Widget-->
            <!--================================-->
            <div id="mainnav-profile" class="mainnav-profile">
                <div class="profile-wrap text-center">
                    <div class="pad-btm">
                        <img class="img-circle img-md" src="../../assets/template/img/profile-photos/1.png" alt="Perfil de Usuario">
                    </div>
                    <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                        <p class="mnp-name">Bienvenido, {{ Auth::user()->name }}</p>
                        <span class="mnp-desc">{{ Auth::user()->email }}</span>
                    </a>
                </div>
            </div>


            <!--Shortcut buttons-->
            <!--================================-->
            <div id="mainnav-shortcut" class="hidden">
                <ul class="list-unstyled shortcut-wrap">
                    <li class="col-xs-3" data-content="My Profile">
                        <a class="shortcut-grid" href="#">
                            <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                            <i class="demo-pli-male"></i>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-3" data-content="Messages">
                        <a class="shortcut-grid" href="#">
                            <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                            <i class="demo-pli-speech-bubble-3"></i>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-3" data-content="Activity">
                        <a class="shortcut-grid" href="#">
                            <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                            <i class="demo-pli-thunder"></i>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-3" data-content="Lock Screen">
                        <a class="shortcut-grid" href="#">
                            <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                            <i class="demo-pli-lock-2"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!--================================-->
            <!--End shortcut buttons-->

		    <ul id="mainnav-menu" class="list-group">
	
	            <!--Category name-->
	            <li class="list-header">Menú</li>
	
	            <!--Menu list item-->
	            <li>
	                <a href="#">
	                    <i class="demo-pli-home"></i>
	                    <span class="menu-title">Dashboard</span>
						<i class="arrow"></i>
	                </a>
	
	                <!--Submenu-->
	                <ul class="collapse">
	                    <li><a href="index.html">Grafica</a></li>
	                </ul>
	            </li>
	
	
	            <!--Menu list item-->
	            <li>
	                <a href="widgets.html">
	                    <i class="demo-pli-gear"></i>
	                    <span class="menu-title">
							Productos
						</span>
	                </a>
	            </li>
            </ul>
        </div>
    </div>
</div>