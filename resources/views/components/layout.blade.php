<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Chiara Bonetti</title>

      
    </head>
    <body class="container">
        <x-nav></x-nav>
        <div class="min-vh-100">
            {{$slot}}
        </div>
        <x-footer></x-footer>
    </body>
</html>
