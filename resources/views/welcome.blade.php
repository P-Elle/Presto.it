<x-main>
    <div class="container-fluid px-0 text-center">

      {{-- HEADER --}}
        <x-navbar/>
        <div class="masthead">
          {{-- <div class="container h-100"> --}}
            <div class="row justify-content-center m-0 brand-trasp-cool-bg">
              <div class="col-11 col-md-6 text-center p-0 m-0">
                    
                <div class="masterhero  px-5 py-2 mt-0 rounded-bottom d-flex flex-column justify-content-center">
                  <h1 class="mb-0">Inserisci i tuoi annunci <br> & trova i migliori affari!</h1>
                            
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
                  @else
                  <div class="row">
                    <div class="col-6 mx-auto">
                      <button class="btn brand-bg brand-white button mt-3">Cerca</button>

                    </div>
                  </div>

                  @endguest
                </div>
                      
                    
              </div> <!--END col-->
            </div> <!--END row-->
          {{-- </div> <!--END container--> --}}
        </div> <!--END masthead-->
        <div class="row brand-dark-bg">
          
            {{-- SEZIONE ANNUNCI --}}
        <section class="my-5">
          <div class="container">
            <div class="row justify-content-center ms-5">

              @foreach ($announcements as $announcement)
                <x-card :announcement="$announcement"/>
              @endforeach
            </div>
          </div>
        </section>
        </div>

      
    </div> 
</x-main>
