<x-layout>

  <!-- Navbar-->
  <x-navbar></x-navbar>

  <header>
    <div class="container-fluid movies">

      <div class="row h-100 justify-content-center">
        <div class="row">
          <h2 class="display-5 text-color text-center">Tutti i nostri film</h2>
        </div>
        @foreach ($movies as $movie)
      <div class="col-12 col-md-3">
        <x-card :movie="$movie" />
      </div>
    @endforeach

      </div>
    </div>
    </div>
  </header>

  <body>


</x-layout>