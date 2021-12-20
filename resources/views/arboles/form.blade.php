<label>Tipo de arbol: </label><input type="text" name="tipo_arbol"><br>
<label>Provincia: </label><input type="text" name="provincia_arbol"><br>
<label>Localidad: </label><input type="text" name="localidad_arbol"><br>
<input type="hidden" name="user_arbol" value="{{ auth()->user()->id }}">
<button type="submit">Enviar</button>