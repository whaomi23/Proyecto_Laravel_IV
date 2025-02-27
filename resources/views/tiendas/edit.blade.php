@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Tienda</h1>
        
        <form action="{{ route('tiendas.update', $tienda->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre de la Tienda</label>
                <input type="text" name="nombre" class="form-control" value="{{ $tienda->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" value="{{ $tienda->direccion }}" required>
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
