<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Kalytera' }}</title>
    </head>
    <body>
        {{ $slot }}
        @vite('resources/js/app.js')
    </body>
</html>
