<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <span><a href="{{route('movies.index')}}">Home</a></span>
    <h1>{{$movies->title}}</h1>
    <p>{{$movies->plot}}</p>
</body>
</html>