<div class="row g-3">
    <div class="col-8 col-md-5 mx-auto mt-5">
        <h1 class="mt-5">Crea il tuo annuncio!</h1>
        @if(session('message'))
            <div class="alert alert-success my-2">{{session('message')}}</div>
        @endif
        <form wire:submit.prevent="store">
            @csrf
            <div class="col-12 mt-1">
                <label for="title">Titolo Annuncio</label>
                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <span class="text-danger small">{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 mt-1">
                <label for="description">Descrizione</label>
                <textarea wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description')
                <span class="text-danger small">{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 mt-1">
                <label for="price">Prezzo</label>
                <input wire:model="price" type="number" step="0.01"  class="form-control @error('price') is-invalid @enderror">
                @error('price')
                <span class="text-danger small">{{$message}}</span>
                @enderror
            </div>
            <div class="col-6 mt-1">
                <button type="submit" class="btn btn-primary shadow px-4 p-2 mt-2">Crea</button>
            </div>
        </form>
    </div>
    
</div>