@extends('./layouts/plantilla')

@section('titulo_head', 'Inicio')

@section('contenido')
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
    </main>
@endsection