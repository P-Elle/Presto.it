<x-main>
  <div class="container-fluid">
    <x-navbar/>
    <div class="row masthead">
      <div class="row brand-trasp-cool-bg justify-content-center m-0">
        <div class="col-11 col-md-6 text-center p-0 m-0">
                  
          <div class="  px-5 py-2 mt-0 rounded-bottom d-flex flex-column justify-content-center">
            <h1 class="mt-3">Inserisci i tuoi annunci <br> & trova i migliori affari!</h1>
                          
            <p class="my-1">
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
                    
                  
        </div>
      </div>
    </div>
  
    <section class="py-5">
            
      <div class="row justify-content-center justify-content-lg-around">
        <h2 class="text-center brand-white pb-4">Sfoglia tra gli annunci più recenti!</h2>
          <div class="col-12 d-flex justify-content-around py-3 white-brand-bg ann-container mt-3 rounded-1">
            @foreach ($announcements as $announcement)
              <x-card :announcement="$announcement"/>
            @endforeach
          </div>  
      </div>
            
    </section>
  </div>

</x-main>