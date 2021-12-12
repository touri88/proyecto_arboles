@extends('layouts.app')

@section('title','Home')

@section('content')
    
<h1 class="text-5xl text-center pt-24">Bienvenido a Arbolink</h1>
<a href="{{ route('arbol.create') }}">Agregar un arbol </a><br>
<a href="{{ route('arbol.index') }}">Buscar un arbol </a><br>
<a href="{{ route('tierra.create') }}">Ofrecer espacio para plantar </a><br>
<a href="{{ route('tierra.index') }}">Buscar espacio para plantar </a><br>

@endsection