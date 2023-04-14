<x-main>
    <x-navbar/>
   
    @if ($announcement_to_check) {{--se c'è l'annuncio da revisionare --}}
    
     {{-- stampiamo il dettaglio dell'annuncio --}}  
    <div class="container-fluid brand-grey-bg">
        <div class="row revisor-2-header shadow">
            <div class="col-12 text-light p-5">
                <h1 class="mt-5 brand-white text-center pt-5">Hai del lavoro da fare...</h1>
            </div>
        </div>
    </div>  
    <div class="container-fluid ann-show brand-grey-bg"> 
        <div class="row">
            <div class="col-10 col-md-6 mx-auto my-5 justify-content-center ann-detail">

                <div class="row detail brand-white-bg justify-content-center">
                    {{-- campo descrittivo --}}
                    <div class="col-12 col-lg-5 p-4">
                        <h2 class="brand">{{$announcement_to_check->title}}</h2>
                        <h3>{{$announcement_to_check->price}} €</h3>
                        <p class="small mt-1">{{$announcement_to_check->category->name ?? "categoria non registrata"}}</p>
                        <p>{{$announcement_to_check->description}}</p>
                        <div class="row mt-5">
                            <div class="col-6">                       
                                <form action="{{ route('revisor.accept_announcement',['announcement'=>$announcement_to_check]) }}"
                                method="POST">
                                    @csrf
                                    @method('PATCH')    
                                    <button class="btn brand-light-bg brand-white shadow" type="submit">Accetta</button>
                                </form>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('revisor.reject_announcement',['announcement'=>$announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')    
                                    <button class="btn shadow brand-bg brand-white" type="submit">Rifiuta</button>
                                </form>  
                            </div>
                        </div>
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


    </div>

    
    @else
        <div class="container-fluid brand-grey-bg">
            <div class="row revisor-header shadow align-items-center">
                <div class="col-12 text-light">
                    <h1 class="brand-dark text-center">Yay!</h1>
                    <h2 class="brand-dark text-center mb-5">{{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
                </div>
            </div>
        </div>
    @endif

</x-main>