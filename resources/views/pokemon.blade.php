<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pokemon['name'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1 class= "titulo_de_pokemon">{{ ucfirst($pokemon['name']) }}</h1>
    <img class= "img_pokemon" src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">

    <h2>Stats</h2>
    <ul>
        @foreach($pokemon['stats'] as $stat)
            <li>{{ $stat['stat']['name'] }}: {{ $stat['base_stat'] }}</li>
        @endforeach
    </ul>

    <h2>Abilities</h2>
    <ul>
        @foreach($pokemon['abilities'] as $ability)
            <li>{{ $ability['ability']['name'] }}</li>
        @endforeach
    </ul>
  
</body>
</html>