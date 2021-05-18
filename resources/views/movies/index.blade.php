<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Quentin Tarantino Filmography</h1>
        <a href="{{route('movies.create')}}"><button type="button" class="btn btn-success">Add a movie</button></a>
        <div class="box_movies">
            @foreach ($movies as $movie)
            <ul>
                <li>
                    <h2>{{$movie->title}}</h2>
                </li>
                <li>Year: {{$movie->year}}</li>
                <li>Genre: {{$movie->genre}}</li>
                <li>Lenght:{{$movie->lenght}}</li>
                <li><a href="{{route('movies.show', $movie->id)}}">Details</a></li>
                <li><a href="{{route('movies.edit', [ 'movie' => $movie->id ])}}">Modifica</a></li>
            </ul>
    @endforeach
        </div>
    
    </div>
</body>
</html>



