<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        <link rel="stylesheet" href="/css/style.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <header>
            <div>
                <h1><a href="/">Sistema de cadastros</a></h1>
                <a href="/unidades">Unidades</a> |
                <a href="/colaboradores">Colaboradores</a>
            </div>
        </header>
        @yield('content')
        
    </body>
</html>
