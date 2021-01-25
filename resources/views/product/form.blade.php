<!--<div class="form-body">-->
    <div class="form-group row" style="justify-content: center;">
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="name">Producto
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9">
                <input type="text" name="name" id="name" class="form-control" placeholder="Introduzca el nombre..." required pattern="^[a-zA-Zñ\s]{0,50}$"> 
            </div>
        </div>
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="code">Codigo
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9">
                <input type="text" name="code" id="code" class="form-control" placeholder="Introduzca el codigo..." required> 
            </div>
        </div>
    </div>
    <div class="form-group row" style="justify-content: center;">

        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="namem">Modelo
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9">
                <select class="form-control" id="id_models" name="id_models">
                    <option value="0" disabled>Selecciona un Opcion</option>
                    @foreach($models as $te)
                        <option value="{{$te->id_models}}">{{$te->namem}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="colour">Color
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9"> 
                <select class="form-control" name="colour" id="colour">              
                    <option value="0" disabled>Seleccione una opcion</option>
                    <option value="NEGRO">NEGRO</option>
                    <option value="CAFE">CAFE</option>
                    <option value="ROJO">ROJO</option>
                    <option value="VERDE">VERDE</option>
                    <option value="BLANCO">BLANCO</option>
                    <option value="BLANCO">AMARILLO</option>
                    <option value="BLANCO">AMARILLO/NEGRO</option>
                    <option value="BLANCO">ROJO/NEGRO</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row" style="justify-content: center;">
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="size">Tamaño
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9">
                <input type="number" name="size" id="size" class="form-control" placeholder="Introduzca el tamaño..." required pattern="^[0-9]{0,50}"> 
            </div>
        </div>
        <div class="col-sm-6 row">
            <label class="control-label col-sm-3" for="stock">Stock
                <span class="required"> * </span>
            </label>
            <div class="col-sm-9">
                <input type="number" name="stock" id="stock" class="form-control" placeholder="Introduzca la cantidad..."> 
            </div>
        </div>
    </div>
    <div class="form-group row" style="justify-content: center;">
        <label class="control-label col-md-3" for="sale_price">Precio
            <span class="required"> * </span>
        </label>
        <div class="col-md-2">
            <input type="number" name="sale_price" id="sale_price" class="form-control" placeholder="Precio..." required> 
        </div>
        <label class="control-label col-md-3" style="text-align: left;">Bs.</label>
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

    <div class="form-group row">
        <label class="control-label col-md-2">Descripcion</label>
        <div class="col-md-9">
            <input type="text" name="description" id="description" class="form-control" placeholder="Introduzca una descripcion..."> 
        </div>
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