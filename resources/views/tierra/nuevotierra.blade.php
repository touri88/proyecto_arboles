@extends('layouts.app')

@section('title','Login')

@section('content')



<h1 class="text-3xl text-center font-bold pt-20">{{ $titulo }}</h1>
<form action="{{ route('tierra.store'); }}" method="post">
    @csrf
    @include('tierra.form')

</form>


@endsection