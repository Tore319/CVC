<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo_head')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    @yield('contenido')

    <footer>
        <div class="container py-6">
            <div class="lc-block d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4">
                    <div editable="rich">
                        <p class="text-muted"> © 2024 Juanjo Torres</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>