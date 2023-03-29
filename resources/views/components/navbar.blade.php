<nav class="navbar navbar-expand-lg px-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Presto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Annunci</a>
        </li>
        
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Username
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Modifica profilo</a></li>
              <li><a class="dropdown-item" href="#">Lavora con noi</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/logout" onclick="event.preventDefault();getElementById('logout').submit();">Esci</a></li>
              <form id="logout" action="/logout" method="POST" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
          <li class="btn btn-success">Inserisci annuncio</li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrati</a>
          </li>
        @endauth
        
      </ul>
    </div>
  </div>
</nav>