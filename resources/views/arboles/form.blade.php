
<div class="input-group w-auto p-3 justify-content-evenly">
<label class="input-group-text bg-success text-white">Tipo de arbol: </label><input class="form-control" type="text" name="tipo_arbol"><br>
<label class="input-group-text bg-success text-white">Provincia: </label><input class="form-control" type="text" name="provincia_arbol"><br>
<label class="input-group-text bg-success text-white">Localidad: </label><input class="form-control" type="text" name="localidad_arbol"><br>
<input type="hidden" name="user_arbol" value="{{ auth()->user()->id }}">
<button class="btn btn-success" type="submit">Enviar</button>
</div>

 
