html 

@extends('layouts.app')

@section('content')
    <h1>Editar Accidente</h1>
    <form action="{{ route('accidentes.update', $accidente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="time" name="hora" value="{{ $accidente->hora }}">
        <input type="text" name="codigo" value="{{ $accidente->codigo }}">
        <input type="date" name="fecha" value="{{ $accidente->fecha }}">
        <input type="text" name="lugar" value="{{ $accidente->lugar }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection
