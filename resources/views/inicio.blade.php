<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <nav>
            <a href="{{ route('login') }}"><li>Login</li></a>
        </nav>
        <h1>Hola</h1>
        @foreach ($csvs as $csv)
            <h2>{{ $csv->nombre }}</h2>
        @endforeach
    </body>
</html>
