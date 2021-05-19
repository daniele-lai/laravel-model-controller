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
        <a href="{{route('movies.create')}}"><button type="button" class="btn btn-primary">Add a movie</button></a>
        <table class="table table-hover mt-2">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Year</th>
                <th scope="col">Genre</th>
                <th scope="col">Length</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($movies as $movie)
                <th scope="row">{{$movie->title}}</th>
                <td>{{$movie->year}}</td>
                <td>{{$movie->genre}}</td>
                <td>{{$movie->lenght}}</td>
                <td><a href="{{route('movies.show', $movie->id)}}">Details</a></td>
                <td>
                    <a href="{{route('movies.edit', [ 'movie' => $movie->id ])}}">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </a>
                    <form action="{{route('movies.destroy', [ 'movie' => $movie->id ])}}" method="POST">
					@csrf
					@method('DELETE')
					    <button type="submit" class="btn btn-danger mt-2">Delete</button>
				    </form>
                </td>

              </tr>
              @endforeach 
            </tbody>
          </table>
    </div>
</body>
</html>



