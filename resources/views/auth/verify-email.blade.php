<x-main>
    <x-navbar/>
    <div class="container-fluid brand-grey-bg">
        <div class="row brand-dark-bg  verify-header shadow justify-content-center align-items-center">
            <div class="col-12 text-light">

                <h1 class="brand-white text-center" style="margin-top: 100px; text-shadow: 5px 5px 5px #332f2f;">{{__('ui.community')}}</h1>
                <h2 class="brand-white text-center mb-5" style="text-shadow: 4px 4px 4px #332f2f;">{{__('ui.link')}}</h1>
                    <div class="col-12 mx-auto brand-trasp-cool-bg p-3 d-flex justify-content-center align-items-center">
                        <p class="text-center m-0">{{__('ui.non')}}
                           <button class="btn button brand-light-bg d-block mx-auto my-2">
                            <a href="/email/verification-notification" onclick="event.preventDefault();getElementById('verification-link').submit();">
                                {{__('ui.click')}}</a></button>
                                {{__('ui.for')}}</p>
                        <form id="verification-link" action="/email/verification-notification" method="POST" class="d-none">
                            @csrf
                          </form>



                    </div>
                    @if (session('status') == 'verification-link-sent')
                    <div class="my-4 text-sm text-center">
                        {{__('ui.verify')}}
                    </div>
                @endif



            </div>

            </div>
        </div>





</x-main>
