<x-layout>
    <div class="container-fluid movies">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
            <h2>{{ $movie->title }}</h2>
            <h3>Regista: {{$movie->director }}</h3>
            <p>{{$movie->plot }}</p>
            <ul>
                @forelse($movie->genres as $genre)
                <li>{{ $genre->name }}</li>
                @empty
                @endforelse
            </ul>
            </div>

            <div class="col-12 col-md-6">
                <img src="{{Storage::url($movie->img) }}" alt="Poster di '{{ $movie->title }}'">
                
            </div>
            @auth
                @if($movie->user_id==Auth::id())
            <div class="row">
                <form action="{{route('movie.delete', compact('movie')) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina il film</button>

                </form>
                @endif
                @endauth
            </div>
        </div>
    </div>
</x-layout>