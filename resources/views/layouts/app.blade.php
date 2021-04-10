<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surge</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased font-sans grid grid-cols-4">
    {{ $sidebar ?? null }}
    <main class="col-span-3">
        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>