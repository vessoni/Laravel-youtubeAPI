
    <div class="row text-center">
        @foreach ($videos["items"] as $key => $video)
            <div class="col-lg-3 col-md-6 mb-4">
            <a href="/video/{{ $video['id']['videoId'] }}" style="text-decoration:none;color: #000;">
                <div class="card h-100">
                  <img class="card-img-top" src="{{ $video["snippet"]["thumbnails"]["high"]["url"] }}" alt="">
                  <div class="card-body">
                    <h4 class="card-title"> {{ $video["snippet"]["title"] }}</h4>
                  </div>
                </div>
            </a>
              </div>

      @endforeach

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
