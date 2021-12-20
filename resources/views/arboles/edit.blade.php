@extends('layouts.app')

@section('title','Login')

@section('content')

<h1>Editar un arbol</h1>

<form action="" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('arboles.form') 
</form>

@endsection