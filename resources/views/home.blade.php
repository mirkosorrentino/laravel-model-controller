<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center text-uppercase">I nostri film:</h1>
    <div class="grid">
        <div class="d-flex flex-wrap">
            @foreach ($movies as $movie)
            <div class="col-4 p-4">
                <div class="card">
                    <img src="{{ $movie -> image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3 class="card-title text-center text-uppercase">{{ $movie -> title }}</h3>
                      <ul>
                        <li>Titolo originale: {{ $movie -> original_title }}</li>
                        <li>Nazionalità: {{ $movie -> nationality }}</li>
                        <li>Data di uscita: {{ $movie ->date }}</li>
                        <li>Voto: {{$movie -> vote}} su 10</li>
                      </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>