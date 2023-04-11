<x-main>

    <x-navbar/>
    <div class="container-fluid p-5 bg-gradient brand-cool-bg shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Ecco tutti i nostri annunci</h1>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="row justify-content-center justify-content-lg-around">
            <div class="container py-3 white-brand-bg ann-container mt-3 rounded-1">
                <div class="row justify-content-around">
                    @foreach ($announcements as $announcement)
                      <x-card :announcement="$announcement"/>
                    @endforeach
                    {{$announcements->links()}}
                </div>

            </div>  
        </div>
    </section>


</x-main>
