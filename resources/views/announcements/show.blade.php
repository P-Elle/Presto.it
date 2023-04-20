<x-main>
    <x-navbar/>
    <div class="container-fluid ann-show brand-trasp-cool-bg">
        <div class="row">
            <div class="col-10 col-md-6 mx-auto justify-content-center ann-detail">

                <div class="row detail brand-white-bg justify-content-center rounded-1">
                    <div class="col-12 col-lg-5 p-4">
                        <h2 class="brand mt-5 mt-lg-0">{{$announcement->title}}</h2>
                        <h3>{{$announcement->price}} €</h3>
                        <p class="small mt-1">{{$announcement->category->name }}</p>
                        <p>{{$announcement->description}}</p>
                    </div>
                    <div class="col-12 col-lg-7 align-item-center justify-content-center p-4">

                        {{-- carosello --}}
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{!$announcement->images()->get()->isEmpty() ? {{--Storage::url($announcement->images()->first()->path)--}}
                                $announcement->images()->first()->getUrl(400,400) : 'https://picsum.photos/400/400'}}" class="v-100 d-block"alt="{{$announcement->title}}">

                            </div>
                            <div class="carousel-item">
                                <img src="{{!$announcement->images()->get()->isEmpty() ? {{--Storage::url($announcement->images()->first()->path)--}}
                                $announcement->images()->first()->getUrl(400,400) : 'https://picsum.photos/400/400'}}" class="v-100 d-block"alt="{{$announcement->title}}">
                            </div>
                            <div class="carousel-item">
                                <img src="{{!$announcement->images()->get()->isEmpty() ? {{--Storage::url($announcement->images()->first()->path)--}}
                                $announcement->images()->first()->getUrl(400,400) : 'https://picsum.photos/400/400'}}" class="v-100 d-block"alt="{{$announcement->title}}">
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{__('ui.previous')}}</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{__('ui.next')}}</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-main>
