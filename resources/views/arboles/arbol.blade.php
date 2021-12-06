<h1> {{ $titulo }} </h1>

<form action="arbol" method="get">
    <label>Provincia: </label><input type="text" name="provincia_arbol"><br>
    <label>Localidad: </label><input type="text" name="localidad_arbol"><br>
    <button type="submit">Buscar</button>
</form>

<table>
    <thead>
        <tr>
            <th>Tipo de arbol</th>
            <th>Provincia</th>
            <th>Localidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($arboles as $item)
            <tr>
                <td> {{ $item->tipo_arbol }} </td>
                <td> {{ $item->provincia_arbol }} </td>
                <td> {{ $item->localidad_arbol }} </td>
            </tr>
        @endforeach
    </tbody>
</table>

