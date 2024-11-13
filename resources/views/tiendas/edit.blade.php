@extends('layouts.app')

@section('content')
    <h1>Editar Tienda</h1>

    <form action="{{ route('tiendas.update', $tienda) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre de la Tienda</label>
            <input type="text" id="nombre" name="nombre" value="{{ $tienda->nombre }}" required>
        </div>
        <div>
            <label for="ubicacion">Ubicación</label>
            <input type="text" id="ubicacion" name="ubicacion" value="{{ $tienda->ubicacion }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection

