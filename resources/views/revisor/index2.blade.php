<x-main>
    <x-navbar/>

    @if ($announcement_to_check) {{--se c'è l'annuncio da revisionare --}}

     {{-- stampiamo il dettaglio dell'annuncio --}}
    <div class="container-fluid brand-grey-bg">
        <div class="row revisor-2-header shadow">
            <div class="col-12 text-light p-5">
                <h1 class="mt-5 brand-white text-center pt-5">{{__('ui.hai')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid ann-show brand-grey-bg">
        <div class="row">
            <div class="col-10 col-md-8 mx-auto my-5 justify-content-center ann-detail">

                <div class="row detail brand-white-bg justify-content-center">
                    {{-- campo descrittivo --}}
                    <div class="col-12 col-lg-4 p-4">
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
                                    <button class="btn brand-light-bg brand-white shadow" type="submit">{{__('ui.accept')}}</button>
                                </form>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('revisor.reject_announcement',['announcement'=>$announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn shadow brand-bg brand-white" type="submit">{{__('ui.refuse')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- LABELS --}}
                    <div class="col-12 col-lg-4 p-4">
                        <h5 class="brand">Tags</h5>
                        <div class="p-2">
                            @if ($announcement_to_check->images[0]->labels)
                                @foreach ($announcement_to_check->images[0]->labels as $label)
                                    <p class="d-inline">{{$label}} , </p>
                                @endforeach                                
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-4">
                        <h5 class="brand">Revisioni immagini</h5>
                        @if(count($announcement_to_check->images) === 1)
                        <p>Adulti: <span class="{{$announcement_to_check->images[0]->adult}}"></span></p>
                        <p>Satira: <span class="{{$announcement_to_check->images[0]->spoof}}"></span></p>
                        <p>Medicina: <span class="{{$announcement_to_check->images[0]->medical}}"></span></p>
                        <p>Violenza: <span class="{{$announcement_to_check->images[0]->violence}}"></span></p>
                        <p>Contenuto razzista: <span class="{{$announcement_to_check->images[0]->racy}}"></span></p>
                        @endif
                    </div>
                   
                    
                   
                    {{-- carosello --}}
                    <div class="col-12 col-lg-5 align-item-center justify-content-center p-4">

                        @if (count($announcement_to_check->images) === 0)
                        <img src="https://picsum.photos/300/300" class="w-100 d-block"alt="{{$announcement_to_check->title}}">
                        @elseif(count($announcement_to_check->images) === 1)
                        
                        <img src="{{$announcement_to_check->images[0]->getUrl(400,400)}}" class="w-100 d-block"alt="{{$announcement_to_check->title}}">

                       @else
                        {{-- carosello --}}
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
               
                            <div class="carousel-inner">
                                @foreach ($announcement_to_check->images as $key => $image)
                                <div class="carousel-item  @if($loop->first)active @endif">
                                    <img src="{{
                                $image->getUrl(400,400)}}" class="w-100 d-block"alt="{{$announcement_to_check->title}}">

                                </div>
                                @endforeach
                           
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{__("ui.previous")}}</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{__("ui.next")}}</span>
                            </button>
                        </div>
                        @endif
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
                    <h2 class="brand-dark text-center mb-5">{{__('ui.nohere')}}</h2>
                </div>
            </div>
        </div>
    @endif
  

</x-main>
