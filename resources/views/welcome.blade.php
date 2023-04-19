<x-main>
  <div class="container-fluid brand-bg welcome-search">

    {{-- HEADER --}}
    <x-navbar/>
    <div class="row masthead">
      <div class="row brand-trasp-cool-bg justify-content-center m-0">
        <div class="col-12 col-lg-6 text-center p-0 m-0">

          <div class="px-5 py-2 mt-0 rounded-bottom d-flex flex-column justify-content-center">
            <h1 class="mt-5 mt-md-3">{{ __('ui.insert1') }}</h1>

            @guest
              <div class="row">

                <div class="col-6 mx-auto mb-5">
                  <button class="btn brand-bg button mt-3"><a class="brand-white" href="{{'/register'}}">{{ __('ui.register') }}</a></button>
                  <hr>
                  <p class="brand-white">{{ __('ui.account') }}<a class="brand-light d-block mb-5" href="{{'/login'}}">{{ __('ui.log') }}</a></p>

                </div>

              </div>
            @endguest




          </div>
        </div>
      </div>
    </div>

    <x-search-announcement/>


    {{-- SEZIONE ANNUNCI --}}

    <section class="py-5">

      <div class="row justify-content-center justify-content-lg-around">
        <h2 class="text-center brand-grey">{{ __('ui.browse')}}</h2>

          <div class="row justify-content-around welcome-cards">
            @foreach ($announcements as $announcement)
              <x-card :announcement="$announcement"/>
              @endforeach

          </div>

      </div>


          </div>
      </div>

    </section>


  </div>

</x-main>
