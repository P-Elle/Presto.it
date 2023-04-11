<x-main>
    <x-navbar/>
    <div class="container-fluid p-5 brand-cool-bg shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Esplora la Categoria {{ $category->name }}</h1>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="row justify-content-center justify-content-lg-around">
            <div class="container py-3 white-brand-bg ann-container mt-3 rounded-1">
                <div class="row justify-content-around">
                    @forelse ($category->announcements as $announcement)
                        <x-card :announcement="$announcement"/>
                    @empty
                        <div class="col-12">
                            <p class="h1">Non sono presenti annunci per questa categoria!</p>
                            <p class="h2">Pubblicane uno: <a href="{{ route('category.view',$category) }}" class="btn shadow">Nuovo Annuncio</a></p>
                        </div>
                    @endforelse
                </div>

            </div>  
        </div>
    </section>
</x-main>
