

<nav class="navbar navbar-expand-lg navbar-dark fixed-top shrink" id="mainNav">

  <div class="container">
    <a class="navbar-brand" href="{{route('welcome')}}">Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 align-items-center">
          {{-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> --}}
          {{-- <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li> --}}
          {{-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li> --}}

          <li class="nav-item"><a class="nav-link" href="{{route('announcements.index')}}">Tutti gli annunci</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
              @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('category.view', $category)}}" >{{($category->name)}}</a></li>
                <li><hr class="dropdown-divider"></li>
              @endforeach
            </ul>
          </li>

          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Modifica profilo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/logout" onclick="event.preventDefault();getElementById('logout').submit();">Esci</a></li>
              <form id="logout" action="/logout" method="POST" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
          <li class="btn brand-light-bg button"><a class="brand-grey" href="{{route('announcements.create')}}">Inserisci Annuncio</a></li>
          
          {{-- Revisore 
            Se l'utente loggato è un revisore--}}
          @if (Auth::user()->is_revisor)
            {{-- stampa nella navbar la sezione dedicata al revisore  --}}
            <li class= "ms-2">
              {{-- nel quale cliccando sul link andrà sulla pagine in cui il revisore potrà revisionare gli annunci --}}
              <a  class="nav-link btn btn-outline-success btn-sm position-relative" 
              aria-current="page" href="{{route('revisor.index')}}">
                Zona Revisore
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pil bg-danger">
                  {{App\Models\Announcement::toBeRevisionedCount()}} {{-- contatore degli annunci da revisonare (un_accepted) --}}
                  <span class="visually-hidden">unread messages</span>
                </span>
              </a>
            </li>
            
          @endif

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
