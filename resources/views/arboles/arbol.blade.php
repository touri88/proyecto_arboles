@extends('layouts.app')

@section('title','Login')

@section('content')



<h1> {{ $titulo }} </h1>

<form action="arbol" method="get">
    <label>Provincia: </label><input type="text" name="provincia_arbol"><br>
    <label>Localidad: </label><input type="text" name="localidad_arbol"><br>
    <label>Tipo: </label><input type="text" name="tipo_arbol"><br>
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
                <td><a href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->tipo_arbol }} </a></td>
                <td><a href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->provincia_arbol }} </a></td>
                <td><a href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->localidad_arbol }} </a></td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection