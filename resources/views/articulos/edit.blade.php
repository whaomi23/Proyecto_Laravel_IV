@extends('layouts.app')

@section('content')
    <h1>Editar Artículo</h1>

    <form action="{{ route('articulos.update', $articulo) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="producto_id">Producto</label>
            <select name="producto_id" id="producto_id">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}" {{ $articulo->producto_id == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="talla">Talla</label>
            <input type="text" id="talla" name="talla" value="{{ $articulo->talla }}" required>
        </div>
        <div>
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" value="{{ $articulo->cantidad }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection

