<x-layout>
  <div class="container-fluid">
    <div class="row">
      <h2>Inserisci il tuo film preferito</h2>
    </div>
    <div class="row">
      <div class="col-12 col-md-8">
        @csrf



        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
        </ul>
      </div>
    @endif


        <form>
          <div class="mb-3">
            <form method="post" action="{{ route('movie.submit') }}" encytype="multipart/form-data"></form>
            <label for="Title" class="form-label">Titolo:</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="titleHelp"
              value="{{ old('title') }}">

          </div>
          <div class="mb-3">
            <label for="director" class="form-label">Regista:</label>
            <input type="text" name="director" class="form-control" id="director" aria-describedby="directorHelp"
              value="{{ old('director') }}">

          </div>
          <div class="mb-3">
            <label for="year" class="form-label">Anno di uscita:</label>
            <input type="text" name="year" class="form-control" id="year" aria-describedby="yearHelp"
              value="{{ old('year') }}">

          </div>
          <div class="mb-3">
            <label for="plot" class="form-label">Trama:</label>
            <textarea name="plot" id="plot" cols="30" rows="10" class="form-control" value="">{{ old('plot') }}</textarea>
          </div>

      </div>
      <div class="mb-3">
        <label for="img" class="form-label">Inserisci una locandina</label>
        <input type="file" name="img" id="img" cols="30" rows="10" class="form-control"></i>
      </div>

      <button type="submit" class="btn btn-primary">Inserisci il tuo film</button>
      </form>
    </div>
  </div>
  </div>
</x-layout>