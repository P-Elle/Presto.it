<x-main>
    <x-navbar/>
    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{-- controllo se ci sono o meno degli annunci da revisionare --}}
                    {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
     @if ($announcement_to_check) {{--se c'è l'annuncio da revisionare --}}
    
     {{-- stampiamo il dettaglio dell'annuncio --}}    
    <div class="container-fluid ann-show brand-cool-bg"> 
        <div class="row">
            <div class="col-10 col-md-6 mx-auto justify-content-center ann-detail">

                <div class="row detail brand-white-bg justify-content-center">
                    {{-- campo descrittivo --}}
                    <div class="col-12 col-lg-5 p-4">
                        <h2 class="brand">{{$announcement_to_check->title}}</h2>
                        <h3>{{$announcement_to_check->price}} €</h3>
                        <p class="small mt-1">{{$announcement_to_check->category->name ?? "categoria non registrata"}}</p>
                        <p>{{$announcement_to_check->description}}</p>
                        <p>                       
                            <form action="{{ route('revisor.accept_announcement',['announcement'=>$announcement_to_check]) }}"
                            method="POST">
                            @csrf
                             @method('PATCH')    
                            <button class="btn btn-success shadow" type="submit">Accetta</button>
                            </form>
                        </p>
                        <p>
                            <form action="{{ route('revisor.reject_announcement',['announcement'=>$announcement_to_check]) }}"
                                method="POST">
                            @csrf
                            @method('PATCH')    
                                <button class="btn btn-danger shadow" type="submit">Rifiuta</button>
                            </form>  
                        </p>
                    </div>

                    {{-- carosello --}}
                    <div class="col-12 col-lg-7 align-item-center justify-content-center p-4">
                        
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/500/300" class="v-100 d-block"alt="{{$announcement_to_check->title}}">

                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/500/300" class="v-100 d-block"alt="{{$announcement_to_check->title}}">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/500/300" class="v-100 d-block"alt="{{$announcement_to_check->title}}">
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        {{-- BOTTONI REVISORE ACCETTA E RIFIUTA --}}
        <div class="row  detail brand-white-bg justify-content-center">
            <div class="col-10 col-md-6 mx-auto justify-content-center ann-detail">

                <div class="row detail brand-white-bg justify-content-center">
                    <div class="col-12 col-lg-5 p-4">
                        <form action="{{ route('revisor.accept_announcement',['announcement'=>$announcement_to_check]) }}"
                            method="POST">
                        @csrf
                        @method('PATCH')    
                            <button class="btn btn-success shadow" type="submit">Accetta</button>
                        </form>
                    </div>
                    <div class="col-12 col-lg-7 align-item-center justify-content-center p-4">
                        <form action="{{ route('revisor.reject_announcement',['announcement'=>$announcement_to_check]) }}"
                            method="POST">
                        @csrf
                        @method('PATCH')    
                            <button class="btn btn-danger shadow" type="submit">Rifiuta</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>


    </div>
        
    @endif

</x-main>