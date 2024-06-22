html

@extends('layouts.app')

@section('content')
    <h1>Crear Accidente</h1>
    <form action="{{ route('accidentes.store') }}" method="POST">
        @csrf
        <input type="time" name="hora" placeholder="Hora">
        <input type="text" name="codigo" placeholder="Código">
        <input type="date" name="fecha" placeholder="Fecha">
        <input type="text" name="lugar" placeholder="Lugar">
        <button type="submit">Crear</button>
    </form>
@endsection
