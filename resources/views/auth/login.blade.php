<x-main>
  <x-navbar />

  {{-- <div class="container-fluid">
      <div class="row brand-top mb-0">
          <div class="col-12 col-md-6 brand-l-yellow-bg mx-auto px-5 py-3 not-overlapping rounded-1">
              <h1 class="mb-5 brand-dark">Accedi</h1>
              <form action="/login" method="POST" class="brand-dark">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="info@example.it">
                    @error('email')
                      <span class="text-danger small">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                      <span class="text-danger small">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Ricordami</label>
                  </div>
                  <button type="submit" class="btn brand-dark-bg brand-white my-3">Accedi</button>
              </form>
          </div>
      </div>
  </div> --}}

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(img/bg-01.jpg);">
          <span class="login100-form-title-1">
            ACCEDI
          </span>
        </div>

        <form action="/login" method="POST" class="login100-form validate-form">
          @csrf
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">E-mail</span>
            <input class="input100" type="email" id="email" name="email" placeholder="info@example.it">
            <span class="focus-input100"></span>
            @error('email')
              <span class="text-danger small">{{$message}}</span>
            @enderror
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" id="password" name="password" placeholder="Enter password">
            <span class="focus-input100"></span>
            @error('password')
              <span class="text-danger small">{{$message}}</span>
            @enderror
          </div>

          <div class="flex-sb-m w-full p-b-30 mt-1">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="#" class="txt1">
                Password dimenticata?
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

</x-main>