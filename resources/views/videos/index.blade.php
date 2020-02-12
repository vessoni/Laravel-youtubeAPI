<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
         <input type="text" id="myInput">
        <button type="button" class="btn btn-warning" id="getRequest">getRequest </button>
    </header>
        <div id="getRequestData">

        </div>
    <!-- Page Features -->
    <div class="row text-center" id="home">
        @foreach ($videos["items"] as $video)

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="/video/{{ $video["id"] }}" style="text-decoration:none;color: #000;">
                <div class="card h-100">
                  <img class="card-img-top" src="{{ $video["snippet"]["thumbnails"]["high"]["url"] }}" alt="">
                  <div class="card-body">
                    <h4 class="card-title"> {{ $video["snippet"]['title'] }}</h4>
                  </div>
                </div>
            </a>
              </div>

      @endforeach

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('#getRequest').click(function(){
        var str = $("#myInput").val();
        $.get('search/'+str,function(data){
            $("#home").html("");
            $('#getRequestData').append(data);
            console.log(data);
        })
    })
})

</script>
    </body>
</html>
