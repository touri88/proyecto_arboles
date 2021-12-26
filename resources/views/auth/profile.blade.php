@extends('layouts.app')

@section('title','Login')

@section('content')

<h1 class="text-3xl text-center font-bold pt-20">Perfil de usuario {{ auth()->user()->name }}</h1>


<h2>{{ $titulo }}</h2>
<table>
    <thead>
        <tr>
            <th>Tipo de arbol</th>
            <th>Provincia</th>
            <th>Localidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($arboles as $item)
            <tr>
                <td><a href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->tipo_arbol }} </td>
                <td><a href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->provincia_arbol }} </td>
                <td><a href="{{ route('arbol.index'); }}/{{ $item->idarbol }}"> {{ $item->localidad_arbol }} </td>
                <td> <a href="{{ url('/arbol/'. $item->idarbol. '/edit') }}">Editar</a> | 

                    <form action="{{ url('/arbol/'. $item->idarbol) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Desea borrar?')" value="Borrar">

                    </form>
                </td>
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
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tierra as $item)
            <tr>
                <td><a href="{{ route('tierra.index'); }}/{{ $item->idtierra }}"> {{ $item->tipo_tierra }} </a></td>
                <td><a href="{{ route('tierra.index'); }}/{{ $item->idtierra }}"> {{ $item->provincia_tierra }} </a></td>
                <td><a href="{{ route('tierra.index'); }}/{{ $item->idtierra }}"> {{ $item->localidad_tierra }} </a></td>
                <td> <a href="{{ url('/tierra/'. $item->idtierra. '/edit') }}">Editar</a> | 

                    <form action="{{ url('/tierra/'. $item->idtierra) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Desea borrar?')" value="Borrar">

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection