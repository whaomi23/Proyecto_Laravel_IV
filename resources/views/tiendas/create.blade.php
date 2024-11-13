@extends('layouts.app')

@section('content')
    <h1>Crear Tienda</h1>

    <form action="{{ route('tiendas.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre de la Tienda</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="ubicacion">Ubicación</label>
            <input type="text" id="ubicacion" name="ubicacion" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection

