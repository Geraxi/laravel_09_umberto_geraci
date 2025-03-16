<x-layout>
    <div class="row justify-content-center">
        <div class="container-fluid movies">
            <div class="row">
                <h2 class="text-white text-color text-center">
                    Profilo di {{ Auth::check() ? Auth::user()->name : 'Ospite' }}
                </h2>

                <h3 class="text-white text-center text-color"></h3>
                <a href="{{ route('movie.create') }}" class="btn btn-outline-warning">Pubblica il tuo primo film</a>
                @forelse (Auth::user()->movies as $movie)
                    <div class="col-12 col-md-4 mb-3">
                        <x-card:movie="$movie" />
                    </div>
                @empty
                    <h3>Non hai ancora pubblicato nessun film</h3>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>