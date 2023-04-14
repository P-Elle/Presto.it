<x-main>
    <x-navbar/>
    <div class="container-fluid brand-grey-bg">
        <div class="row category-header shadow">
            <div class="col-12 text-light p-5">
                <h1 class="mt-5 brand-white text-center pt-5"><span class="brand-cool">{{ $category->name }}</span>: una nuova vita.</h1>
            </div>
            <x-search-announcement/>
        </div>
    

    <section class="py-5">
        <div class="row justify-content-center justify-content-lg-around">
            <div class="container py-3 brand-grey-bg ann-container mt-3 rounded-1">
                <div class="row justify-content-around">
                    @forelse ($announcements as $announcement)
                        <x-card :announcement="$announcement"/>
                    @empty
                        <div class="col-12">
                            <p class="h1">Non sono presenti annunci per questa categoria!</p>
                            <p class="h2">Pubblicane uno: <a href="{{ route('announcements.create') }}" class="btn shadow">Nuovo Annuncio</a></p>
                        </div>
                    @endforelse
                </div>

            </div>  
        </div>
    </section>
</div>
</x-main>
