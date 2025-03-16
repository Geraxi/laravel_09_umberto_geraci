<x-layout>
  <div class="container-fluid movies">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 text-white text-color">

        <h2 class="display-4 text-center">Inserisci il tuo film preferito</h2>

        <form method="POST" action="{{ route('movie.create') }}" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" name="title" class="form-control" id="title" required>
          </div>

          <div class="mb-3">
            <label for="director" class="form-label">Regista:</label>
            <input type="text" name="director" class="form-control" id="director" required>
          </div>

          <div class="mb-3">
            <label for="year" class="form-label">Anno di uscita:</label>
            <input type="text" name="year" class="form-control" id="year" required>
          </div>

          <div class="mb-3">
            <label for="plot" class="form-label">Trama:</label>
            <textarea name="plot" id="plot" cols="30" rows="10" class="form-control" required></textarea>
          </div>

          <div class="mb-3">
            <label for="img" class="form-label">Poster:</label>
            <input type="file" name="img" class="form-control" id="img" accept="image/*" required>
          </div>

          <div class="mb-3">
            @foreach ($genres as $genre)
              <input type="checkbox" id="{{'genreCheck'.$genre->id }}" name="genres[]" value="{{ $genre->id }}">
              <label for="{{'genreCheck'.$genre->id }}">{{ $genre->name }}</label>
            @endforeach
            <p>Non vedi la categoria corretta? <a href="{{ route('genre.create') }}" class="fst-italic small">Inseriscila tu</a></p>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>
</x-layout>
