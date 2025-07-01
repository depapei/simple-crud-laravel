<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Technical Test - Rangga Andika Wibisana</title>
        <!-- @vite('resources/css/app.css') -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-C_BXQvzt.css') }}">
    </head>
    <body class="antiliased">
        <div class="container mx-auto">
            <h1 class="text-4xl text-center">
                Online Technical Test Aksesmu (PT Sumber Trijaya Lestari)
            </h1>
            <h2 class="text-2xl text-center">
                by Rangga Andika Wibisana
            </h2>

            <div class="mt-3">
                @yield('content')
            </div>

        </div>
    </body>
</html>
