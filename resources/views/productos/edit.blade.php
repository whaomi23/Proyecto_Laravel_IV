
@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre del Producto</label>
            <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" required>{{ $producto->descripcion }}</textarea>
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" value="{{ $producto->precio }}" required>
        </div>
        <div>
            <label for="tienda_id">Tienda</label>
            <select name="tienda_id" id="tienda_id">
                @foreach($tiendas as $tienda)
                    <option value="{{ $tienda->id }}" {{ $producto->tienda_id == $tienda->id ? 'selected' : '' }}>{{ $tienda->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="categoria_id">Categoría</label>
            <select name="categoria_id" id="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
