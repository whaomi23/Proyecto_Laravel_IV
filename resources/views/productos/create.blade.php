
@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre del Producto</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" required>
        </div>
        <div>
            <label for="tienda_id">Tienda</label>
            <select name="tienda_id" id="tienda_id">
                @foreach($tiendas as $tienda)
                    <option value="{{ $tienda->id }}">{{ $tienda->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="categoria_id">Categoría</label>
            <select name="categoria_id" id="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
