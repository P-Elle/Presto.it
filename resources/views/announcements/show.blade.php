<x-main>
    <x-navbar/>
    <div class="container-fluid ann-show brand-trasp-cool-bg">
        <div class="row">
            <div class="col-10 col-md-6 mx-auto justify-content-center ann-detail">

                <div class="row detail brand-white-bg justify-content-center rounded-1">
                    <div class="col-12 col-lg-5 p-4">
                        <h2 class="brand mt-5 mt-lg-0">{{$announcement->title}}</h2>
                        <h3>{{$announcement->price}} €</h3>
                        <p class="small mt-1">
                            @if (App::isLocale('it'))
                                {{$announcement->category->name}}
                            @elseif (App::isLocale('en'))
                                {{$announcement->category->name_en}}
                            @elseif (App::isLocale('es'))
                                {{($announcement->category->name_es)}}
                            @endif
                        <p>{{$announcement->description}}</p>
                    </div>
                    <div class="col-12 col-lg-7 align-item-center justify-content-center p-4">
                        
                        @if (count($announcement->images) === 0)
                        <img src="https://picsum.photos/300/300" class="w-100 d-block"alt="{{$announcement->title}}">
                        @elseif(count($announcement->images) === 1)
                        <img src="{{$announcement->images[0]->getUrl(400,400)}}" class="w-100 d-block"alt="{{$announcement->title}}">

                       @else
                        {{-- carosello --}}
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
               
                            <div class="carousel-inner">
                                @foreach ($announcement->images as $key => $image)
                                <div class="carousel-item  @if($loop->first)active @endif">
                                    <img src="{{
                                $image->getUrl(400,400)}}" class="v-100 d-block"alt="{{$announcement->title}}">

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
</x-main>
