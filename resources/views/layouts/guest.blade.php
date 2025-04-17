@extends('../layouts/plantilla')

@section('titulo_head', 'Login')

@section('contenido')
    <h1 class="text-center">Login</h1>
    <div class="container my-5 mx-auto">
        <div class="container my-5 mx-auto">
            {{ $slot }}
        </div>
    </div>
@endsection
