<x-main>
    <x-navbar/>
    <div class="container-fluid brand-grey-bg">
        <div class="row brand-header category-header shadow">
            <div class="col-12 text-light p-5">
                <h1 class="mt-5 brand-light text-center pt-5"><span class="brand-cool">{{ $category->name }}</span>{{ __('ui.life')}}</h1>
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
                            <p class="h1">{{__('ui.none')}}</p>
                            <p class="h2">{{__('ui.publish')}}<a href="{{ route('announcements.create') }}" class="btn shadow">{{__('ui.new')}}</a></p>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
    </section>
</div>
</x-main>
