<x-main>

    <x-navbar/>
    <div class="container-fluid brand-grey-bg">
        <div class="row brand-header index-header shadow justify-content-center">
            <div class="col-12 text-light p-5">
                <h1 class="mt-5 brand-white text-center pt-5"><span class="brand-cool"></span>{{__('ui.gusto')}}</h1>
            </div>
            <x-search-announcement/>
        </div>

        <section>
            <div class="row justify-content-center justify-content-lg-around brand-grey-bg mt-5 pt-5">
                <div class="container py-3 ann-container mt-3 rounded-1">

                    <div class="row justify-content-around index-cards">
                        @forelse ($announcements as $announcement)
                            <x-card :announcement="$announcement"/>
                        @empty
                            <h3>{{__('ui.no')}}</h3>
                        @endforelse
                        {{$announcements->links()}}
                    </div>

                </div>
            </div>
        </section>

    </div>
</x-main>
