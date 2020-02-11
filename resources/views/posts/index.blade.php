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
         <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">YoutubeAPI</h1>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
        @foreach ($posts["items"] as $post)
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="{{ $post["snippet"]["thumbnails"]["high"]["url"] }}" alt="">
          <div class="card-body">
            <h4 class="card-title"> {{ $post["snippet"]['title'] }}</h4>
          </div>
        </div>
      </div>

      @endforeach

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
        <div class="container">


        </div>

    </body>
</html>
