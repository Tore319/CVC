@extends('../layouts/plantilla')

@section('titulo_head', 'Gestion de Archivos')

@section('contenido')
    <h1 class="text-center">Gestion</h1>
    @foreach ($csvs as $csv)
        <h2 class="text-center">{{ $csv->nombre }}</h2>
    @endforeach

    {{ $csvs->links() }}
@endsection