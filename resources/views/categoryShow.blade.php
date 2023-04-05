<x-main>
    <x-navbar/>
    <div class="container-fluid p-5 bg-gradient brand-cool-bg shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Esplora la categoria {{ $category->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse ($category->announcements as $announcement)
                        <div class="col-12 col-md-4 my-2">
                        <x-card :announcement='$announcement'/>
                    @empty
                    <div class="col-12">
                        <p class="h1">Non sono presenti annunci per questa categoria!</p>
                        <p class="h2">Pubblicane uno cliccando<a class="brand-white" href="{{route('announcements.create')}}">  qui.</a>

                        </a></p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-main>
