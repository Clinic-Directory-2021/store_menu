<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    
    <title>Document</title>
    @livewireStyles
</head>
<body>
    <livewire:menu />
    <script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
    @livewireScripts
</body>
</html>