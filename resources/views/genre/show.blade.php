<x-layout>
    <div class="container-fluid movie">
        <div class="row">
            <h2 class="text-white text-color display-4 py-5">Film del genere <span>{{ $genre->name }}</span></h2>
        </div>
        <div class="row justify-content-center"></div>
        @forelse($genre->movies as $movie)
        <div class="col-12 col-md-3 d-flex justify-content-center">
        <x-card :movies="$movie" />
        </div>
        @empty
        <div class="col-12 col-md-8">
            <h4 class="text-white text-color text-center">Nessun film collegato a questa categoria</h4>
            <a href="{{ route('movie.create') }}" class="btn btn-warning">Crealo tu!</a>
        </div>

        @endforelse
    </div>
</x-layout>