
<div class="form-body" >
    <div class="form-group row" style="justify-content: flex-start;">
        <label class="control-label col-sm-4">Nombre/Empresa
            <span class="required"> * </span>
        </label>
        <div class="col-sm-6">
            <input type="text" name="name" id="name" class="form-control" placeholder="Introduzca el Nombre..."required pattern="^[a-zA-Z_ñ\s]{0,30}$"> 
        </div>
    </div>
    <div class="form-group row" style="justify-content: flex-start;">
        <label class="control-label col-sm-4">Correo Electronico
            <span class="required"> * </span>
        </label>
        <div class="col-sm-6">
            <input type="email" name="email" id="email" class="form-control" placeholder="Introduzca el correo electronio..." pattern="^[a-zA-Z_ñ@_-.0-9\s]{0,150}$" required> 
        </div>
    </div>
    <div class="form-group row" style="justify-content: flex-start;">
        <label class="control-label col-sm-4">Tipo de Documento</label>
        <div class="col-sm-6">
            <select class="form-control" name="document" id="document">
                <option value="0" disabled>Selecione una opcion</option>
                <option value="CEDULA">CEDULA</option>
                <option value="NIT">NIT</option>
            </select>
        </div>
    </div> 
    <div class="form-group row" style="justify-content: flex-start;">
        <label class="control-label col-sm-4">Documento<span class="required"> * </span></label>
        <div class="col-sm-6">
            <input type="text" name="nro_document" id="nro_document" class="form-control" placeholder="Introduzca los datos..." required pattern="^[0-9A-Z\s]{0,20}$"> 
        </div>
    </div>
    <div class="form-group row" style="justify-content: flex-start;">
        <label class="control-label col-sm-4">Direccion</label>
        <div class="col-sm-6">
            <input type="text" name="address" id="address" class="form-control" placeholder="Introduzca una direccion..." pattern="^[a-zA-Z0-9-°_ñ\s]{0,30}$"> 
        </div>
    </div>
    <div class="form-group row" style="justify-content: flex-start;">
        <label class="control-label col-sm-4">Telefono/Celular</label>
        <div class="col-sm-6">
            <input type="number" name="telephone" id="telephone" class="form-control" placeholder="Introduzca un telefono o celular..." pattern="[0-9]{0,15}"> 
        </div>
    </div>
</div>
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