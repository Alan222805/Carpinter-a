<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Editar Producto: {{ $producto->nombre }}</h1>
        <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $producto->descripcion }}</textarea>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen actual del Producto:</label>
                <div>
                    <img src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}" style="max-width: 200px;">
                </div>
            </div>

            <div class="form-group">
                <label for="imagen">Cambiar imagen del Producto:</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
                <small class="form-text text-muted">Dejar en blanco si no desea cambiar la imagen.</small>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
            <a href="{{ route('catalogo') }}" class="btn btn-info">Volver a la lista</a>
        </form>
    </div>
</body>

</html>