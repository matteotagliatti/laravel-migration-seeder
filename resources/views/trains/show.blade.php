<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    <h1>{{ $title }} {{ $train->id }}</h1>
    @include('partials.nav')
    <div class="train-detail">
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
</body>

</html>
