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
    <h3><a href="{{route('movies.index')}}">Home</a></h3>
    <div class="container_show">
        <div class="container_details">
            <h1>{{$movies->title}}</h1>
            <p>{{$movies->plot}}</p>
        </div>
        <div class="img_details">
            <img src={{ asset('img/pngegg.png') }} alt="Pulp Fiction dance">
        </div>
    </div>
    
    
</body>
</html>