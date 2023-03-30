<x-main>
    <x-navbar/>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-6 mt-5 mx-auto">
                <h1 class="mb-5 mt-3">Accedi</h1>
                <form action="/login" method="POST">
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
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
    
</x-main>