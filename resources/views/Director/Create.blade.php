

<form class="form-horizontal" method="POST" action="/Director/store">
    @csrf
    <div class="form-group">
           <label for="Nombre" class="col-sm-2 control-label">Nombre Director </label>
           <div class="col-sm-10">
                 <input type="text" name="nombre" id="nombre">
           </div>
    </div>
    <div class="form-group">
        <label for="Apellido1" class="col-sm-2 control-label">Apellido1 </label>
        <div class="col-sm-10">
              <input type="text" name="apellido1" id="apellido1">
        </div>
 </div>
 <div class="form-group">
    <label for="Apellido2" class="col-sm-2 control-label">Apellido 2 </label>
    <div class="col-sm-10">
          <input type="text" name="apellido2" id="apellido2">
    </div>
</div>
<div class="form-group">
    <label for="Cedula" class="col-sm-2 control-label">Cedula</label>
    <div class="col-sm-10">
          <input type="text" name="cedula" id="cedula">
    </div>
</div>
<button type="submit" value="Guardar"></button>
</form>