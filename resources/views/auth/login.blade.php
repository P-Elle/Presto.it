<x-main>
  <x-navbar/>
  <div class="container-fluid brand-cool-bg">
      <div class="row brand-top mb-0">
          <div class="col-12 col-md-6 brand-white-bg mx-auto px-5 py-3 not-overlapping">
              <h1 class="mb-5 brand-trasp-cool">Accedi</h1>
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
                  <div>
                    <a href="/auth/google/redirect"><p class="d-inline">Accedi con </p> <i class="brand-light bi bi-google"></i></a>
                    <a href="/auth/facebook/redirect"><p class="d-inline">Accedi con </p> <i class="brand-light bi bi-google"></i></a>

                  </div>
                  {{-- ricordami --}}
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Ricordami') }}
                    </label>
                  </div>
                
                  <button type="submit" class="btn brand-cool-bg brand-grey my-3">Accedi</button>
              </form>
          </div>
      </div>
  </div>
  
</x-main>