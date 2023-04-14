<x-main>
    <x-navbar/>
    {{-- <div class="container-fluid p-5 brand-cool-bg shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Ora sei revisore!</h1>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid ">
        <div class="row container-revisor">
            <div class="col-6 col-revisor">
                <div class="row">
                    <h1 class="brand-cool text-center">Benvenuto nel nostro team!</h1>
                </div>
               <div class="row button-revisor">
                    <a href="{{route('revisor.index')}}" class="btn brand-light-bg brand-white mt-5">Inizia qui</a>
               </div>
               
            </div>
            <div class="col-6 img-revisor">
            </div>
        </div>
    </div>
</x-main>