<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- using bulma --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        
        <style>
            table tr td {
                border: solid black 1px;
            }
            table {
                width: 80%;
            }
            .center {
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
                margin-bottom: auto;
            }
        </style>
    </head>

    <body>
        <header>
            @include('header')
        </header>
        <div class="bg-white">
            @yield('content')
        </div>
        <footer>
            @include('footer')
        </footer>
    </body>
</html>