<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YoutubeAPI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="/">FirstPage</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>


  <div class="container" style="margin-top: 6%;">
    <div class="col-md-12">
        <div class="card mb-4">
          <iframe width="100%" height="560" src="https://www.youtube.com/embed/{{$video['id']}}"></iframe>
          <div class="card-body">
            <h2 class="card-title">{{ $video['snippet']['title'] }}</h2>
            <p class="card-text"> {{ $video['snippet']['description'] }}</p>
          </div>
          <div class="card-footer text-muted">
            {{ $video['snippet']['publishedAt'] }}
          </div>
        </div>
    </div>

  </div>


    </body>
</html>
