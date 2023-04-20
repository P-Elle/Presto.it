<x-main>
    <x-navbar/>
    <div class="container-fluid brand-trasp-cool-bg">
        <div class="row brand-top mb-0">
            <div class="col-12 col-md-6 mx-auto px-5 py-3 not-overlapping brand-white-bg">
                <h1 class="mb-5 mt-3 brand-trasp-cool">{{__('ui.register')}}</h1>
                <form action="/register" method="POST" class="brand-trasp-cool">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('ui.complete')}}</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Mario Rossi">
                        @error('name')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('ui.mail')}}</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="info@example.com">
                        @error('email')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{__('ui.pass')}}</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{__('ui.confirm')}}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="d-flex my-3">
                        <button type="submit" class="btn brand-trasp-cool-bg brand-white me-3">{{__('ui.register')}}</button>
                        <p class="align-self-center me-3">{{__('ui.or')}}</p>
                        <div class="row">
                          <div class="col-12">
                            <a class="btn btn-outline-dark" href="/auth/google/redirect" role="button" style="text-transform:none">
                              <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                              {{__('ui.login')}}
                            </a>
                          </div>
                        </div>
                    </div>



                </form>


            </div>
        </div>
    </div>
</x-main>
