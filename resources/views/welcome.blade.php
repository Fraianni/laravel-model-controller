<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/app.css">

    <title>Controller</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


<body>
    <div class="cards-container">
        @foreach ($movies as $movie)
            <div class="card">
                <h4>{{ $movie['title'] }}</h1>
                    <p>original title:{{ $movie['original_title'] }}</p>
                    <p> nationality:{{ $movie['nationality'] }}</p>
                    <p>vote:{{ $movie['vote'] }}</p>


            </div>
        @endforeach
    </div>

</body>

</html>
