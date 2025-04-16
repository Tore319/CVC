@extends('./layouts/plantilla')

@section('titulo_head', 'Inicio')

@section('contenido')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">CSV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (auth()->guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endif
                    @if (auth()->check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link">logout</button>
                    </form>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Subir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gestión</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <h1 class="text-center">Codigo CSV</h1>
        <div class="container-fluid">
            <form action="">
                <p class="text-center">
                    <label for="csv">Inserte el Codigo CSV</label>
                </p>
                <p class="text-center">
                    <input type="text" id="csv" name="csv">
                </p>
            </form>
        </div>
        @foreach ($csvs as $csv)
        <h2 class="text-center mt-5 fw-bold">{{ $csv->nombre }}</h2>
        @endforeach
    </main>
@endsection