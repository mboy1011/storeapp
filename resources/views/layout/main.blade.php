<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-icons.css') }}">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
    @yield('css')
</head>
<body>
    <header>
        @include('layout.navbar')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('layout.footer')
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // MaterializeCSS Init
        M.AutoInit();
    </script>
    @yield('js')
</body>
</html>