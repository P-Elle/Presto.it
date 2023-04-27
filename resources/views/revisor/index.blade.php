<x-main>
    <x-navbar />

    @if ($announcement_to_check) {{-- se c'è l'annuncio da revisionare --}}

        {{-- stampiamo il dettaglio dell'annuncio --}}
        <div class="container-fluid brand-grey-bg">
            <div class="row revisor-2-header shadow">
                <div class="col-12 text-light p-5">
                    <h1 class="mt-5 brand-white text-center pt-5">{{ __('ui.hai') }}</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid ann-show brand-grey-bg">
            <div class="row">
                <div class="col-10 col-md-8 mx-auto my-5 justify-content-center ann-detail">

                    <div class="row detail brand-white-bg justify-content-center">
                        {{-- campo descrittivo --}}
                        <div class="col-12 col-lg-4 p-4">
                            <h2 class="brand">{{ $announcement_to_check->title }}</h2>
                            <h3>{{ $announcement_to_check->price }} €</h3>
                            <p class="small mt-1">
                                {{ $announcement_to_check->category->name ?? 'categoria non registrata' }}</p>
                            <p>{{ $announcement_to_check->description }}</p>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <form
                                        action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn brand-light-bg brand-white shadow"
                                            type="submit">{{ __('ui.accept') }}</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <form
                                        action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn shadow brand-bg brand-white"
                                            type="submit">{{ __('ui.refuse') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        @if (count($announcement_to_check->images) === 0)
                            <div class="col-12 col-lg-4 order-1">
                                <img src="https://picsum.photos/300/300"
                                    class="w-100 d-block"alt="{{ $announcement_to_check->title }}">
                            </div>
                        @elseif(count($announcement_to_check->images) === 1)
                            <div class="col-12 col-lg-4 py-4 order-3 order-lg-2">
                                <h5 class="brand">Revisioni immagini</h5>
                                <p>Adulti: <span class="{{ $announcement_to_check->images[0]->adult }}"></span></p>
                                <p>Satira: <span class="{{ $announcement_to_check->images[0]->spoof }}"></span></p>
                                <p>Medicina: <span class="{{ $announcement_to_check->images[0]->medical }}"></span></p>
                                <p>Violenza: <span class="{{ $announcement_to_check->images[0]->violence }}"></span>
                                </p>
                                <p>Contenuto razzista: <span
                                        class="{{ $announcement_to_check->images[0]->racy }}"></span></p>
                                <h5 class="brand">Tags</h5>

                                {{-- LABELS --}}
                                @if ($announcement_to_check->images[0]->labels)
                                    @foreach ($announcement_to_check->images[0]->labels as $label)
                                        <p class="d-inline small">{{ $label }}, @if ($label)
                                            @endif
                                        </p>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-12 col-lg-4 py-4 order-2 order-lg-3">
                                <img src="{{ $announcement_to_check->images[0]->watermark() }}"
                                    class="w-100 d-block"alt="{{ $announcement_to_check->title }}">
                            </div>
                        @else
                            {{-- accordion --}}
                            <div class="col-12 col-lg-8">





                                <div class="accordion" id="accordionRevisor">
                                    @foreach ($announcement_to_check->images as $key => $image)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $key }}" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    {{ $announcement_to_check->title }} img{{ $key + 1 }}
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $key }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionRevisor">
                                                <div class="accordion-body d-flex flex-row flex-wrap">


                                                    <div class="col-6">
                                                        <h5 class="brand">Revisioni immagini</h5>
                                                        <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                                        <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                                        <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                                        <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                                        <p>Contenuto razzista: <span
                                                                class="{{ $image->racy }}"></span></p>
                                                    </div>
                                                    <div class="col-6 ps-3">
                                                        <img src="{{ $image->watermark() }}"
                                                            class="w-100 d-block"alt="{{ $announcement_to_check->title }}">
                                                    </div>


                                                    <div class="col-12 pt-2">
                                                        <h5 class="brand">Tags</h5>
                                                        {{-- LABELS --}}

                                                        @foreach ($image->labels as $label)
                                                            <p class="d-inline small">{{ $label }},</p>
                                                        @endforeach
                                                    </div>



                                                </div>


                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                        @endif
                    </div>









                </div>

            </div>
        </div>


        </div>
    @else
        <div class="container-fluid brand-grey-bg">
            <div class="row revisor-header shadow align-items-center">
                <div class="col-12 text-light">
                    <h1 class="brand-dark text-center">Yay!</h1>
                    <h2 class="brand-dark text-center mb-5">{{ __('ui.nohere') }}</h2>
                </div>
            </div>
        </div>
    @endif


</x-main>
