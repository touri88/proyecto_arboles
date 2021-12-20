@extends('layouts.app')

@section('title','Login')

@section('content')



<h1>{{ $titulo }}</h1>
    <form action="{{ route('arbol.store'); }}" method="post">
    @csrf
    @include('arboles.form')

</form>


@endsection