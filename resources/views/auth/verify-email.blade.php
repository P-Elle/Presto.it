<x-main>
    <x-navbar/>
    <div class="container-fluid brand-grey-bg">
        <div class="row wip-header shadow align-items-center">
            <div class="col-12 text-light">
                <h1 class="brand-white text-center" style="text-shadow: 5px 5px 5px #332f2f;">Benvenut* nella nostra community</h1>
                <h2 class="brand-white text-center mb-5" style="text-shadow: 4px 4px 4px #332f2f;">Conferma il link che ti abbiamo inviato sulla mail</h1>

            </div>

            {{-- <div>
                <div class="col-12 text-light">
                    <h3>Se non hai ricevuto il link di conferma , clicca qui per richiederlo nuovamente</h3>

                    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        A new email verification link has been emailed to you!
    </div>
    @endif --}}

            </div>
        </div>





</x-main>
