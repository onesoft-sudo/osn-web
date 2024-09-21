<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OSN</title>

        <link rel="icon" href="{{ asset('icon.png') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
        @vite('resources/ts/app.ts')
    </head>
    <body>
        <header>
            <x-navbar />
        </header>
        <div class="pt-20"></div>
        {{ $slot }}
    </body>
</html>
