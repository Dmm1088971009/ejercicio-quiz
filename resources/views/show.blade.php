html

@extends('layouts.app')

@section('content')
    <h1>Detalles del Accidente</h1>
    <p>Hora: {{ $accidente->hora }}</p>
    <p>Código: {{ $accidente->codigo }}</p>
    <p>Fecha: {{ $accidente->fecha }}</p>
    <p>Lugar: {{ $accidente->lugar }}</p>
    <form action="{{ route('accidentes.destroy', $accidente->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
