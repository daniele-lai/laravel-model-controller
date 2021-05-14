<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Quentin Tarantino Filmography</h1>
    @foreach ($movies as $movie)
        <ul>
            <li>
                <h2>{{$movie->title}}</h2>
            </li>
            <li>Year: {{$movie->year}}</li>
            <li>Genre: {{$movie->genre}}</li>
            <li>Lenght:{{$movie->lenght}}</li>
            <li><a href="{{route('movies.show', $movie->id)}}">Details</a></li>
        </ul>
    @endforeach
    
</body>
</html>



