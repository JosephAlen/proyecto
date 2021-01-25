<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3">Modelo
            <span class="required"> * </span>
        </label>
        <div class="col-md-7">
            <input type="text" name="name" id="name" class="form-control" placeholder="Introduzca el modelo..." required pattern="^[a-zA-Z0-9_-ñ\s]{0,30}$"> 
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Descripcion</label>
        <div class="col-md-7">
            <input type="text" name="description" id="description" class="form-control" placeholder="Introduzca una descripcion..."> 
        </div>
    </div>                                            
</div>
<hr>
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