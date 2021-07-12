<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>Titolo: {{$movie->title}}</h2>
                    <h3>Titolo Originale: <strong>{{$movie->original_title}}</strong></h3>
                    <span>Paese: <strong>{{$movie->nationality}}</strong></span><br>
                    <span>Data di Uscita: <strong>{{$movie->date}}</strong></span><br>
                    <span>Voto: <strong>{{$movie->vote}}</strong></span>
                </div>
                <hr>
            @endforeach
        </div>
    </main>
</body>
</html>