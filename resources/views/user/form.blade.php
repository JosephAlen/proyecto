<!--<div class="form-body">-->
    <div class="form-group row" style="justify-content: center;">
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="name">Nombre
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9">
                <input type="text" name="name" id="name" class="form-control" placeholder="Introduzca el nombre..." required pattern="^[a-zA-Z_ñ\s]{0,30}$"> 
            </div>
        </div>
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="roles">Rol
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9">
                <select class="form-control" name="id_roles" id="id_roles">
                                                
                <option value="0" disabled>Seleccione una opcion</option>
                
                @foreach($role as $rol)
                  
                   <option value="{{$rol->id_roles}}">{{$rol->namer}}</option>
                        
                @endforeach

                </select>
            </div>
        </div>
    </div>
    <div class="form-group row" style="justify-content: center;">
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="document">Tipo Doc.</label>
            <div class="col-sm-9">
                <select class="form-control" name="document" id="document">
                    <option value="CEDULA">CEDULA</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="nro_document">C.I.<span class="required"> * </span></label>
            <div class="col-sm-9">
                <input type="text" name="nro_document" id="nro_document" class="form-control" placeholder="Introduzca documento..." required pattern="^[0-9A-Z\s]{0,20}$"> 
            </div>
        </div>
    </div>
    <div class="form-group row" style="justify-content: center;">
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="email">Email
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9">
                <input type="email" name="email" id="email" class="form-control" placeholder="Introduzca un correo electronico..." required pattern="^[a-zA-Z_ñ@_-.0-9\s]{0,150}$"> 
            </div>
        </div>
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="telephone">Tel/Cel</label>
            <div class="col-sm-9">
                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Introduzca telefono/celular..." pattern="[0-9]{0,15}"> 
            </div>
        </div>
    </div>
    <div class="form-group row"style="justify-content: center;">
        <label class="control-label col-md-3">Direccion</label>
        <div class="col-md-6">
            <input type="text" name="address" id="address" class="form-control" placeholder="Introduzca su direccion..." pattern="^[a-zA-Z0-9_ñ-.\s]{0,250}$"> 
        </div>
        <label class="control-label col-md-3"></label>
    </div>

    <div class="form-group row" style="justify-content: center;">
        <label class="control-label col-md-3" for="user">Usuario
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" name="user" id="user" class="form-control" placeholder="Intoduzca un NickName..." required pattern="^[a-zA-Z_ñ\s]{0,30}$">
        </div>
        <label class="control-label col-md-3" style="text-align: left;"></label>
    </div>
    <div class="form-group row" style="justify-content: center;">
        <label class="control-label col-md-3" for="password">Contraseña
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese la contraseña..." requerid>
        </div>
        <label class="control-label col-md-3" style="text-align: left;"></label>
    </div>
    <div class="form-group row" style="justify-content: center;">
        <label class="control-label col-md-3" for="imagen">Imagen
            <span class="required"> * </span>
        </label>
        <div class="col-md-4 note-form-group note-group-select-from-files">
            <input type="file" name="imagen" id="imagen" class="note-image-input form-control note-form-control note-input"> 
        </div>
        <label class="control-label col-md-3">
        </label>
    </div> 
           <hr>                               
<!--</div>-->
    <div class="form-group row" style="justify-content: center;">
        <div class="col-md-3" >
            <button type="button" class="btn btn-default btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger" data-dismiss="modal">
                <i class="fa fa-times"></i>
                Cancelar
            </button>
        </div>
        <div class="col-md-2" >
            <button type="submit" class="btn btn-info btn-lg mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success">
                <i class="fa fa-check"></i>
                Guardar
            </button>
        </div>
    </div>