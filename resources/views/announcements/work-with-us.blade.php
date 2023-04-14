<x-main>
    <x-navbar/>
    <div class="container">
        <div class="row">
            <div class="col-6 container-work ">
                <div class="row text-center my-5">
                    <h1 class="display-3">Diventa revisor!</h1>
                    <h3>Lavora comodamente da casa</h2>
                    <p class="mt-3">Compila il form e invia la tua candidatura</p>
                </div>
                
                <form action="{{route('become.revisor')}}" method="POST" class="brand-dark form-work" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Mario">
                        @error('name')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Cognome</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Rossi">
                        @error('last_name')
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
                        <label for="body" class="form-label">Presentati!</label>
                        <textarea class="form-control" name="body" id="body" cols="30" rows="5"></textarea>
                    </div>
    
                    <div class="mb-3">
                        <label for="cv" class="form-label">Allega il CV</label>
                        <input class="form-control" type="file" id="cv" name="cv">
                    </div>
                    
                    <button type="submit" class="btn brand-dark-bg brand-white my-3">Candidati</button>
                </form>
                
                
            </div>
            <div class="col-6 img-work"></div>
        </div>
    </div>
</x-main>