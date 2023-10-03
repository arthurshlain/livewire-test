<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')

        @vite('resources/js/app.js')

        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="max-w-7xl mx-auto">

            <livewire:item-upload-wire-ui />

        </div>

        @wireUiScripts
        @livewireScripts
    </body>
</html>