<x-main>
    <x-navbar/>
    <div class="container-fluid brand-grey-bg mt-5">
        <div class="row brand-header shadow align-items-center">
            <div class="col-12 text-light">
                <h1 class="brand-cool" style="text-shadow: 5px 5px 5px #332f2f;">Benvenut*, {{$user->name}}!</h1>
                
                <h2 class="brand-dark">Ecco qui le tue info</h2>

                <div class="container">
                    <div class="row">
                        <div class="col-12 brand-trasp-cool-bg">
                            <h3>Nome: </h3>
                            <p>{{$user->name}}</p>
                            <h3>E-mail: </h3>
                            <p>{{$user->email}}</p>
                            <h3>Sei revisore?</h3>
                            <p>@if ($user->is_revisor == 1)
                                Sì
                                @else
                                No 
                                <a href="{{route('work.with.us')}}" class="btn brand-light-bg brand-white">Diventa revisore</a>
                                @endif
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</x-main>
