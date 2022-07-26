<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="https://kit.fontawesome.com/94ae44446c.js" crossorigin="anonymous"></script>

        <title>Golden Shoe</title>
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            </style>
    @routes
    </head>
    <body class="antialiased">
        <div id="app">
            <navbar></navbar>
            @yield('content')
        </div>
    </body>
</html>
