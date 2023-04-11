<x-main>

    <x-navbar/>
    <div class="container-fluid p-5 bg-gradient brand-cool-bg shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Ecco tutti i nostri annunci</h1>
            </div>
        </div>
    </div>
    <x-search-announcement/>
    <section class="py-5">
        <div class="row justify-content-center justify-content-lg-around">
            <div class="container py-3 white-brand-bg ann-container mt-3 rounded-1">
                
                <div class="row justify-content-around">
                    @forelse ($announcements as $announcement)
                      <x-card :announcement="$announcement"/>
                    @empty
                    <h3>Non ci sono annunci per la tua ricerca...</h3>
                    @endforelse
                    {{$announcements->links()}}
                </div>

            </div>  
        </div>
    </section>


</x-main>
