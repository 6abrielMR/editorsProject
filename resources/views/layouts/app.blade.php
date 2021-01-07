<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Larafoto</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
            integrity="CB5995F2-94AE-43BD-AF53-8F403C577F7A"
            crossorigin="anonymous" />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand brand" href="{{ route('mainview') }}">Editors</a>
            </div>
        </nav>
        <main class="container-fluid">
            <div class="row">
                <div class="col-2 pt-4 main-menu">
                    <ul>
                        <li><a href="{{ route('mainview') }}"><i class="far fa-list-alt"></i> Ver editoriales</a></li>
                        <li><a href="{{ route('editorial.create') }}"><i class="fas fa-plus-circle"></i> Crear editorial</a></li>
                        <li><a href="{{ route('libro.create') }}"><i class="fas fa-book"></i> Crear libro</a></li>
                    </ul>
                </div>
                <div class="col-10 main-content">@yield('content')</div>
            </div>
        </main>
    </body>
</html>