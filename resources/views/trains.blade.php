<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeder</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <h1>{{ $title }}</h1>
    <nav>
        <a href="/">Home</a>
        <a href="/all">Tutti i treni</a>
    </nav>
    <div class="grid">
        @foreach ($trains as $train)
            <div class="train">
                <p>{{ $train->id }}</p>
                <p>{{ $train->azienda }}</p>
                <p>Stazione partenza: {{ $train->stazione_partenza }}</p>
                <p>Stazione arrivo: {{ $train->stazione_arrivo }}</p>
                <p>Giorno di partenza: {{ $train->giorno_partenza }}</p>
                <p>Giorno di arrivo: {{ $train->giorno_arrivo }}</p>
                <p>Orario di partenza: {{ $train->orario_partenza }}</p>
                <p>Orario di arrivo: {{ $train->orario_arrivo }}</p>
                <p>Cod treno: {{ $train->codice_treno }}</p>
                <p>Numero carrozze: {{ $train->numero_carrozze }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
