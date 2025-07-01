<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Technical Test - Rangga Andika Wibisana</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antiliased">
        <div class="p-12">
            <h1 class="text-4xl">
                Online Technical Test Aksesmu (PT Sumber Trijaya Lestari)
            </h1>
            <h2 class="text-2xl mb-4">
                by Rangga Andika Wibisana
            </h2>

            <a href="{{ route('product.index') }}" class="border border-gray-500 hover:border-gray-700 text-gray-500 hover:text-gray-700 font-bold py-2 px-4 rounded">Let's get started</a>
        </div>
    </body>
</html>
