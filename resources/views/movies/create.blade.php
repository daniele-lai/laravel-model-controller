<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>Add a new movie</title>
</head>
<body>
    <div class="container mb-5 mt-2">
        <small><a href="{{route('movies.index')}}">Back to Home</a></small>
        <h1>Add a movie</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('movies.store')}}" method="post">
        @csrf
        @method('POST')
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="genre">Genres</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter genres">
            </div>
            <div class="form-group">
                <label for="language">Languages</label>
                <input type="text" class="form-control" id="language" name="language" placeholder="Enter languages">
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" id="year" name="year" min="1992" max="" placeholder="Enter year">
            </div>
            <div class="form-group">
                <label for="lenght">Lenght</label>
                <input type="number" class="form-control" id="lenght" name="lenght" placeholder="Enter lenght">
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name="director" placeholder="Enter director">
            </div>
            <div class="form-group">
                <label for="plot">Plot</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="plot" rows="6"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>