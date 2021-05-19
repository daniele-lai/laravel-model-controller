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
    <div class="container mt-2">
        <small><a href="{{route('movies.index')}}">Back to Home</a></small>
        <h1>{{$movies->title}}</h1>
        <p>{{$movies->plot}}</p>
    </div>
</body>
</html>