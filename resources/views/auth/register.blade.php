<x-main>
    <x-navbar/>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-6 mx-auto mt-5">
                <h1 class="mb-5 mt-3">Registrati</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Mario Rossi">
                        @error('name')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="info@example.com">
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-main>