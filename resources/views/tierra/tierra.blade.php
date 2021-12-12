@extends('layouts.app')

@section('title','Login')

@section('content')



<h1> {{ $titulo }} </h1>

<form action="tierra" method="get">
    <label>Provincia: </label><input type="text" name="provincia_tierra"><br>
    <label>Localidad: </label><input type="text" name="localidad_tierra"><br>
    <label>Tipo: </label><input type="text" name="tipo_tierra"><br>
    <button type="submit">Buscar</button>
</form>

<table>
    <thead>
        <tr>
            <th>Tipo de espacio</th>
            <th>Provincia</th>
            <th>Localidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tierra as $item)
            <tr>
                <td> {{ $item->tipo_tierra }} </td>
                <td> {{ $item->provincia_tierra }} </td>
                <td> {{ $item->localidad_tierra }} </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection