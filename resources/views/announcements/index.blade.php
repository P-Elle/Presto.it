<x-main>

    <x-navbar/>
    <div class="container-fluid p-5 bg-gradient brand-cool-bg shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Ecco tutti i nostri annunci</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">

                    @foreach ($announcements as $announcement)
                      <x-card :announcement="$announcement"/>
                    @endforeach
                    {{$announcements->links()}}
                </div>
            </div>
        </div>
    </div>


</x-main>
