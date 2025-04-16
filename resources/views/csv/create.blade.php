@extends('../layouts/plantilla')

@section('titulo_head', 'Subir archivos')

@section('contenido')
    <h1 class="text-center">Subir Archivos</h1>
    <form action="{{ route('csv.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="dni" class="form-label">DNI: </label>
            <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni')}}" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" required>
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos: </label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{old('apellidos')}}">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo electronico: </label>
            <input type="text" class="form-control" id="correo" name="correo" value="{{old('correo')}}" required>
        </div>
        <div class="mb-3">
            <label for="archivo" class="form-label">Archivo: </label>
            <input type="file" class="form-control" id="archivo" name="archivo" accept="application/pdf" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
@endsection