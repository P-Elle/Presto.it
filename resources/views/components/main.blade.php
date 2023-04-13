<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <title>Presto</title>
   

    @vite(['resources/css/app.css','resources/css/styleLogin.css','resources/css/style.css',  'resources/css/styleLogin.css','resources/js/app.js'])
    
    @livewireStyles
</head>
<body>
    {{$slot}}
    @auth
    
    @endauth
    @livewireScripts
    <x-footer/>
</body>
</html>

