<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tittle }} - Controle de séries</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $tittle }}</h1>
    
        {{$slot}}
    </div>
</body>
</html>