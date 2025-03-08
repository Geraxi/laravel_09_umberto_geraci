<div class="card mb-3" style="width: 18rem;">
  @if(!$movie->img)
                       <img src="{{Storage::url($movie->img)}}" class="card-img-top cardImg" alt="poster di "{{$movie['title']}}"">
                       @endif
                       <div class="card-body">
                        <h5 class="card-title">{{$movie['title']}}</h5>
                        <h5 class="card-title muted">{{$movie['director']}}</h5>
                        <p class="card-text">{{$movie['genres']}}</p>
                        <a href="{{route('movie.detail', ['id'=>$movie['id']])}}" class="btn btn-primary">Leggi di più</a>
                      </div>
                    </div>