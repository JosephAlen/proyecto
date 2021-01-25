@extends('dashboard')
@section('container')
<div class="page-content-wrapper">
    <div class="page-content">
            <div class="col-md-12">
                <div class="card card-box">
                    <h1 style="text-align: center;">Bienvenido(a) {{Auth::user()->user}}</h1>
                    <br>
                    <div class="app__layout">
                        <!-- Header -->
                        <main class="app__layout-content">
                            <div class="yo" style="display: flex; justify-content: center;">
                                <video autoplay style="width: 400px; margin-top: 20px; border-style: solid; border-width: 5px; border-radius: 10px;"></video>
                            </div>
                            <!-- Dialog  -->
                            <div class="app__dialog app__dialog--hide" style="display: flex; justify-content: center; margin-top: 20px; margin-bottom: 25px;">
                                <div class="app__dialog-content">
                                    <form id="formulario" method="Post"> 
                                        <input type="text" id="result" style="visibility:hidden">
                                        <button type="button" class="btn btn-circle btn-success btn-lg" name="enviar" onclick="recibir();location.reload();">
                                            <div class="icon-holder" style="font-size: 20px;">
                                            <i class="material-icons">play_arrow</i>
                                                Entrar
                                            </div>
                                        </button>

                                        <br>
                                        <div id="txt">

                                        </div>
                                    </form>
                                </div>
                                
                                <div class="app__dialog-actions">
                                    <!--<button type="button" class="app__dialog-open">Open</button> -->
                                    <button type="button" class="app__dialog-close" style="visibility: hidden;">Close</button>
                                </div>
                            
                            </div>
                            <div class="app__dialog-overlay app__dialog--hide" ></div>
                            <!-- Snackbar -->
                            <div class="app__snackbar"></div>
                        </main>
                    </div>
                    <div class="app__overlay"  >
                        <div class="app__overlay-frame" ></div>
                        <!-- Scanner animation -->
                        <div class="custom-scanner" ></div>
                        <div class="app__help-text" ></div>
                    </div>
                    <!--<div class="app__select-photos" ></div>-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection