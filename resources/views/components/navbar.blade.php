<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}"><i class="bi bi-camera-reels"></i></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li>
          <a href="{{ route('user.profile') }}">Profilo personale</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Route::currentRouteName() == 'homepage') active active-custom @endif"
            aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('aboutUs') }}">Chi siamo</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacts') }}">Contattaci</a>
        </li>

        <!-- "I nostri servizi" Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            I nostri servizi <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap Caret Icon -->
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('movie.index') }}">Tutti i film</a></li>
            <li><a class="dropdown-item" href="{{ route('movie.create') }}">Inserisci il tuo film</a></li>
            <li><a class="dropdown-item" href="{{ route('genre.create') }}">Aggiungi una categoria</a></li>
            <li><a class="dropdown-item" href="{{ route('genre.index') }}">Tutte le categorie</a></li>
          </ul>
        </li>

        <!-- User Authentication Dropdown -->
        <li class="nav-item dropdown">
          @auth
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Ciao, {{ Auth::user()->name }} <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap Caret Icon -->
        </a>
        <ul class="dropdown-menu" aria-labelledby="userDropdown">
        <li><a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
          </a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        </ul>
      @else
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Account <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap Caret Icon -->
      </a>
      <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
      <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
      </ul>
    @endauth
        </li>
      </ul>
    </div>
  </div>
</nav>