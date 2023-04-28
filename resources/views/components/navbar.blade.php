

<!-- As a heading -->
<nav class="navbar navbar-expand ms-auto bg-body-tertiary fixed-top brand-dark-bg">
  <div class="container">

    <ul class="navbar-nav ms-auto text-uppercase ms-auto py-0 align-items-center">
       @auth
      <li class="nav-item dropdown brand-white">
        <a class="nav-link dropdown-toggle brand-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Account
        </a>
       
      
        <ul class="dropdown-menu">
          <li><a class="dropdown-item"> {{auth()->user()->name}}</a></li>

          <li><a class="dropdown-item" href="{{route('account', auth()->user()->id)}}">Modifica profilo</a></li>
          <li><a class="dropdown-item" href="{{route('work.with.us')}}">Lavora con noi</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/logout" onclick="event.preventDefault();getElementById('logout').submit();">Esci</a></li>
          <form id="logout" action="/logout" method="POST" class="d-none">
            @csrf
          </form>
        </ul>
     
      </li>
      
      

      @else
      <li class="nav-item">
        <a class="nav-link brand-white" href="/login">Accedi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link brand-white" href="/register">Registrati</a>
      </li>
      @endauth
      <li class="nav-item mx-lg-3 ms-0"><x-_locale lang="it" nation='it'/></li>
      <li class="nav-item mx-lg-3 ms-0"><x-_locale lang="en" nation='gb'/></li>
      <li class="nav-item mx-lg-3 ms-auto"><x-_locale lang="es" nation='es'/></li>


    </ul>
  
  </div>
</nav>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark shrink" id="mainNav">

  <div class="container">
    <a class="navbar-brand" href="{{route('welcome')}}">Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        {{__('ui.menu')}}
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 align-items-center">
          <li class="nav-item"><a class="nav-link text-end" href="{{route('announcements.index')}}">{{__('ui.all')}}</a></li>

          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.categories')}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
              @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('category.view', $category)}}" >
                  @if (App::isLocale('it'))
                    {{($category->name)}}
                  @elseif (App::isLocale('en'))
                    {{($category->name_en)}}
                  @elseif (App::isLocale('es'))
                    {{($category->name_es)}}
                  @endif
                </a></li>
                <li><hr class="dropdown-divider"></li>
              @endforeach
            </ul>
          </li>


          {{-- <li class="nav-item d-none d-lg-block"><x-_locale lang="it" nation='it'/></li>

          <li class="nav-item d-none d-lg-block"><x-_locale lang="en" nation='gb'/></li>

          <li class="nav-item d-none d-lg-block"><x-_locale lang="es" nation='es'/></li> --}}

          {{-- <li class="nav-item d-lg-none"><x-_locale lang="it" nation='it'/> <x-_locale lang="en" nation='gb'/> <x-_locale lang="es" nation='es'/></li> --}}
         
           
          @auth
          <li class="btn brand-light-bg button"><a class="brand-grey" href="{{route('announcements.create')}}">{{__('ui.insert')}}</a></li>
          
          {{-- Revisore
            Se l'utente loggato è un revisore--}}
          @if (Auth::user()->is_revisor)
            {{-- stampa nella navbar la sezione dedicata al revisore  --}}
            <li class= "ms-2 mt-lg-0 mt-3">
              {{-- nel quale cliccando sul link andrà sulla pagine in cui il revisore potrà revisionare gli annunci --}}
              <a  class="btn brand-bg brand-white button position-relative"
              aria-current="page" href="{{route('revisor.index')}}">
              {{__('ui.rev')}}
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pil bg-danger">
                  {{App\Models\Announcement::toBeRevisionedCount()}} {{-- contatore degli annunci da revisonare (un_accepted) --}}
                  <span class="visually-hidden">{{__('ui.unread')}}</span>
                </span>
              </a>
            </li>

          @endif
          @endauth
          
        </ul>


      </div>
  </div>
</nav>

