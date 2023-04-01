<x-main>
    <div class="container-fluid px-0 text-center">

      {{-- HEADER --}}
        
        
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
