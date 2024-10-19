<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pokemon['name'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body >
        <div class="myCard">
            <div class="innerCard">
                <div class="frontSide">
                    <h1 class= "titulo_de_pokem">{{ ucfirst($pokemon['name']) }}</h1>
                    <img class= "img_pokemon" src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">
                </div>
                <div class="backSide">
                    <div class="stats-habilities-container">
                        <div class="col">
                            <p class="title ">Stats</p>
                            <ul>
                                @foreach($pokemon['stats'] as $stat)
                                    <li>{{ $stat['stat']['name'] }}: {{ $stat['base_stat'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <p class="title ">Abilities</p>
                            <ul>
                                @foreach($pokemon['abilities'] as $ability)
                                    <li>{{ $ability['ability']['name'] }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script>
            // Selecciona la tarjeta y el cuerpo del documento
            const card = document.querySelector('.myCard');
            const body = document.body;
        
            // Escucha cuando la tarjeta esté en hover (se voltea)
            card.addEventListener('mouseenter', () => {
                body.classList.add('flipped'); // Cambia el fondo al voltear
            });
        
            // Escucha cuando el hover termina (la tarjeta vuelve a su posición original)
            card.addEventListener('mouseleave', () => {
                body.classList.remove('flipped'); // Restaura el fondo original
            });
        </script>
  
</body>
</html>