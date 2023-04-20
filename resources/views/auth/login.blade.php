<x-main>
  <x-navbar/>
  <div class="container-fluid brand-cool-bg">
      <div class="row brand-top mb-0">
          <div class="col-12 col-md-6 brand-white-bg mx-auto px-5 py-3 not-overlapping">
              <h1 class="mb-5 brand-trasp-cool">{{__("ui.log")}}</h1>
              <form action="/login" method="POST" class="brand-cool">
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
                  <div class="mb-3 form-check d-none">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Ricordami</label>
                  </div>
                  <div class="d-flex my-3">
                    <button type="submit" class="btn brand-cool-bg brand-grey me-3">Accedi</button>
                    <p class="align-self-center me-3">oppure</p>
                    <div class="row">
                      <div class="col-12">
                        <a class="btn btn-outline-dark" href="/auth/google/redirect" role="button" style="text-transform:none">
                          <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                          Entra con Google
                        </a>
                      </div>
                    </div>
                  </div>
                  {{-- ricordami --}}
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Ricordami
                    </label>
                  </div>
              </form>
          </div>
      </div>
  </div>

</x-main>
