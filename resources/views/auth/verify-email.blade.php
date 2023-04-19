<x-main>
    <x-navbar/>
    <div class="container-fluid brand-grey-bg">
        <div class="row brand-dark-bg  verify-header shadow justify-content-center align-items-center">
            <div class="col-12 text-light">
               
                <h1 class="brand-white text-center" style="margin-top: 100px; text-shadow: 5px 5px 5px #332f2f;">Benvenut* nella nostra community</h1>
                <h2 class="brand-white text-center mb-5" style="text-shadow: 4px 4px 4px #332f2f;">Conferma il link che ti abbiamo inviato sulla mail</h1>
                    <div class="col-12 mx-auto brand-trasp-cool-bg p-3 d-flex justify-content-center align-items-center">
                        <p class="text-center m-0">Se non hai ricevuto la mail 
                           <button class="btn button brand-light-bg d-block mx-auto my-2">
                            <a href="/email/verification-notification" onclick="event.preventDefault();getElementById('verification-link').submit();"> 
                        clicca qui</a></button>
                         per ricevere un nuovo link.</p>
                        <form id="verification-link" action="/email/verification-notification" method="POST" class="d-none">
                            @csrf
                          </form>
                          


                    </div>
                    @if (session('status') == 'verification-link-sent')
                    <div class="my-4 text-sm text-center">
                       Ti abbiamo mandato un nuovo link di verifica!
                    </div>
                @endif
                    
                    
                    
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
