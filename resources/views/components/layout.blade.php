<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Julien Mallet - Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#040926]">
    <x-navbar></x-navbar>
    <div class="flex flex-col items-center">
        <x-page-title>{{$title}}</x-page-title>
    </div>
    {{$slot}}
</body>
</html>