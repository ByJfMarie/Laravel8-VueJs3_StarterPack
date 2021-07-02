<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{env('APP_NAME')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/> --}}
</head>
<body>
<div id="app">
</div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>