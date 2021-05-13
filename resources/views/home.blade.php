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
    @foreach ($movies as $item)
        <ul>
            <li>{{$item->title}}</li>
            <li>Year: {{$item->year}}</li>
            <li>Genre: {{$item->genre}}</li>
            <li>Lenght:{{$item->lenght}}</li>
        </ul>
    @endforeach
    
</body>
</html>



