<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travels</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        h1 {
            text-transform: uppercase;
            text-align: center;
        }

        .container {
            width: 1200px;
            margin: auto;
            display: flex;
            justify-content: center
        }

        .card {
            margin: 30px;
            padding: 25px;
            background-color: cornflowerblue;
        }

    </style>
</head>

<body>
    <h1>I nostri pacchetti</h1>
    <div class="container">
        @foreach ($packs as $pack)
            <div class="card">
                <h2>{{ $pack['pack_name'] }}</h2>
                <h4>Destinazioni: {{ $pack['destinations_qnt'] }}</h4>
                <h4>Punto di partenza: {{ $pack['start_point'] }}</h4>
                <h4>Prezzo: {{ $pack['price'] }}€</h4>
            </div>
        @endforeach
    </div>
</body>

</html>
