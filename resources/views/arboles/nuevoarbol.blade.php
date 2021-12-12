@extends('layouts.app')

@section('title','Login')

@section('content')



<h1>{{ $titulo }}</h1>
    <form action="{{ route('arbol.store'); }}" method="post">
    @csrf
    <label>Tipo de arbol: </label><input type="text" name="tipo_arbol"><br>
    <label>Provincia: </label><input type="text" name="provincia_arbol"><br>
    <label>Localidad: </label><input type="text" name="localidad_arbol"><br>
    <input type="hidden" name="user_arbol" value="{{ auth()->user()->id }}">
    <button type="submit">Enviar</button>

</form>


@endsection