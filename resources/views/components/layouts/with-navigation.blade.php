<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? '.::Components::.' }}</title>
</head>
<body>
    <x-header/>

    {{ $slot }}

<footer style="text-align: center">
    <hr>
    <p style="text-align: center">
        {{ $copyright ?? 'All right reserved' }}
    </p>
</footer>
</body>
</html>
