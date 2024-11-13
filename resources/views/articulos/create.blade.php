
@extends('layouts.app')

@section('content')
    <h1>Crear Artículo</h1>

    <form action="{{ route('articulos.store') }}" method="POST">
        @csrf
        <div>
            <label for="producto_id">Producto</label>
            <select name="producto_id" id="producto_id">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="talla">Talla</label>
            <input type="text" id="talla" name="talla" required>
        </div>
        <div>
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
