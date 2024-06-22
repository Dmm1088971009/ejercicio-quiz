html

@extends('layouts.app')

@section('content')
    <h1>Accidentes</h1>
    <a href="{{ route('accidentes.create') }}">Crear Accidente</a>
    <ul>
        @foreach ($accidentes as $accidente)
            <li>{{ $accidente->codigo }} - <a href="{{ route('accidentes.show', $accidente->id) }}">Ver</a> - <a href="{{ route('accidentes.edit', $accidente->id) }}">Editar</a></li>
        @endforeach
    </ul>
@endsection