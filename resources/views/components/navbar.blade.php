<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}"><i class="bi bi-camera-reels"></i></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if (Route::current Route(name()== 'homepage')@endif active active-custom " aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aboutUs')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">I nostri servizi</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('movie.list')}}">Tutti i nostri film</a></li>
                
            </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>