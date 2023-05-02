<x-main>
    <x-navbar/>
    <div class="container-fluid brand-cool-bg">
        <div class="row">
            <div class="col-10 col-md-6 mx-auto justify-content-center ann-detail">
                

                <div class="row detail brand-white brand-grey-bg justify-content-center">
                    
                    <div class="col-12 col-lg-8 p-4">
                        <h1 class="brand">Benvenut<span class="brand-light">*</span>, {{$user->name}}!</h1>
                            
                            <hr class="brand-cool">
                            <h3 class="brand-cool">Nome: </h3>
                            <p class="brand">{{$user->name}}</p>
                            
                            <h3 class="brand-cool">E-mail: </h3>
                            <p class="brand">{{$user->email}}</p>
                            <h3 class="brand-cool">Sei revisore?</h3>
                            <p class="brand">@if ($user->is_revisor == 1)
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
</x-main>
