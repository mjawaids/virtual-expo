<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Virtual Expo') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Your Visitor Stats</h1>
    <p>
        There were total of <em>{{ $visitors }}</em> visits at your stand <em>{{ $stand->name }}</em> in event <em>{{ $event->name }}</em>.
    </p>
</body>
</html>
