@extends('layouts.app')

@section('title','Login')

@section('content')

<h1>ESTE ES EL PERFIL DE {{ auth()->user()->name }}</h1>


<h2>{{ $titulo }}</h2>
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
                <td><a href="/arbolink/arbolink/public/arbol/{{ $item->idarbol }}"> {{ $item->tipo_arbol }} </td>
                <td><a href="/arbolink/arbolink/public/arbol/{{ $item->idarbol }}"> {{ $item->provincia_arbol }} </td>
                <td><a href="/arbolink/arbolink/public/arbol/{{ $item->idarbol }}"> {{ $item->localidad_arbol }} </td>
            </tr>
        @endforeach
    </tbody>
</table>

<h2>{{ $titulo2 }}</h2>
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
                <td><a href="/arbolink/arbolink/public/tierra/{{ $item->idtierra }}"> {{ $item->tipo_tierra }} </a></td>
                <td><a href="/arbolink/arbolink/public/tierra/{{ $item->idtierra }}"> {{ $item->provincia_tierra }} </a></td>
                <td><a href="/arbolink/arbolink/public/tierra/{{ $item->idtierra }}"> {{ $item->localidad_tierra }} </a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection