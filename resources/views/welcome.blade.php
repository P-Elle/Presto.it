<x-main>
<<<<<<< Updated upstream
    <div class="container-fluid px-0 text-center">
      <x-navbar/>
         
            <div class="masthead">
              {{-- <div class="container h-100"> --}}
                <div class="row justify-content-center m-0 brand-trasp-cool-bg">
                  <div class="col-11 col-md-6 text-center p-0 m-0">
                    
                        <div class="masterhero  px-5 py-2 mt-0 rounded-bottom d-flex flex-column justify-content-center">
                          <h1 class="mb-0">Inserisci i tuoi annunci <br>
                            & trova i migliori affari!</h1>
                            
                          <p class="mt-2 mb-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni inventore facere suscipit tenetur. Odit eveniet sequi cupiditate exercitationem incidunt eligendi?
                          </p>
                          @guest
                          <div class="row">
                            <div class="col-6 mx-auto">
                              <button class="btn brand-bg button mt-3"><a class="brand-white" href="{{'/register'}}">Registrati</a></button>
                              <hr>
                                <p> Hai già un account? <a class="brand-light d-block mb-2" href="{{'/login'}}">ENTRA</a></p>

                            </div>

                          </div>
                          @endguest
                        </div>
                      
                    
                  </div> <!--END col-12-->
                </div> <!--END row-->
              {{-- </div> <!--END container--> --}}
            </div> <!--END masthead-->
            <div class="row light-brand-bg">
              <h2>hello!</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dignissimos unde, autem accusantium quis quod voluptatem porro numquam maxime quidem doloremque rerum aspernatur odit saepe.</p>
            </div>
          
    </div>
</x-main>
=======
    <div class="container-fluid text-center">
        <x-navbar/>
        {{-- HEADER --}}
        <div class="row">
            <div class="masthead px-0">
                <div class="container h-100">
                    <div class="row h-100 align-content-center justify-content-center">
                        <div class="col-6 text-center">
                            <h1>Inserisci i tuoi annunci e trova i migliori affari!</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni inventore facere suscipit tenetur. Odit eveniet sequi cupiditate exercitationem incidunt eligendi?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEZIONE ANNUNCI --}}
        <section class="my-5">
            <div class="container">
                <div class="row justify-content-center ms-5">

                    @foreach ($announcements as $announcement)

                    <x-card :announcement="$announcement"/>
                    @endforeach

                    {{-- <div class="col-12 col-md-4 my-4">

                            <img src="https://picsum.photos/200" class="card-img-top p-3 rounded" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$announcement->title}}</h5>
                                <p class="card-text">{{$announcement->body}}</p>
                                <p class="card-text">{{$announcement->price}}</p>
                                <a href="" class="btn btn-primary shadow">Visualizza</a>
                                <a href="" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria:
                                    {{$announcement->category->name}}</a>

                                    <p class="card-footer">Pubblicato il : {{$announcement->created_at->format('d/m/Y')}}}</p>
                                </div>
                            </div>
                        </div>



                    {{-- </div> --}}
                </div>
            </section>
        </div>
    </x-main>
>>>>>>> Stashed changes
