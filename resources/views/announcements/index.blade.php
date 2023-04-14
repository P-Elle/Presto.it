<x-main>

    <x-navbar/>
    <div class="container-fluid brand-white-bg">
        <div class="row index-header shadow">
            <div class="col-12 text-light p-5">
                <h1 class="mt-5 brand-white text-center pt-5"><span class="brand-cool"></span>Abbiamo annunci per ogni gusto!</h1>
            </div>
            <x-search-announcement/>
        </div>
    
    <section class="py-5">
        <div class="row justify-content-center justify-content-lg-around">
            <div class="container py-3 white-brand-bg ann-container mt-3 rounded-1">
                
                <div class="row justify-content-around index-cards">
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

</div>
</x-main>
