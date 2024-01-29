<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center pt-3 text-uppercase text-blue"><strong>Movies</strong></h1>
    <div class="container py-5 d-flex flex-wrap justify-content-center align-items-top gap-3 ">
        @foreach ($movies as $movie)
            <div class="card py-3 border-warning " style="width: 34rem">
                <div class="card-body">
                    <h2>Title: <strong>{{ $movie['title'] }}</strong></h2>
                    <h3>Original Title: <strong>{{ $movie['original_title'] }}</strong></h3>
                    <h4>Nationality: <strong>{{ $movie['nationality'] }}</strong></h4>
                    <h5>Data: <strong>{{ $movie['date'] }}</strong></h5>
                    <h5>Vote: <strong>{{ $movie['vote'] }}</strong></h5>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
