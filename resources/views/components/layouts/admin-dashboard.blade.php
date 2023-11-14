<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Kalytera' }}</title>
    </head>
    <body>
        <div class="min-h-[100vh] max-h-[100vh] flex">
            <div class="bg-red-300 flex-[20%]">
                <div></div>
            </div>
            <div class="flex-[80%]">
                Wello
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
