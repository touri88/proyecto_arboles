@extends('layouts.app')

@section('title','Login')

@section('content')



<h1 class="text-success text-center">{{ $titulo }}</h1>
    <form action="{{ route('arbol.store'); }}" method="post">
    @csrf
    @include('arboles.form')

</form>


@endsection