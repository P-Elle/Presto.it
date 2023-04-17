<div class="row brand-top mb-0 g-3 justify-content-center d-flex">
    <div class="col-12 col-md-6 brand-grey-bg mx-0 px-5 not-overlapping">
        <h1 class="my-3 text-center">Crea il tuo annuncio!</h1>
        @if(session('message'))
            <div class="alert alert-success my-2">{{session('message')}}</div>
        @endif
        
            <form wire:submit.prevent="store">
                @csrf
                <div class="col-12 mt-1 mb-3">
                    <label for="title">Titolo Annuncio</label>
                    <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <span class="text-danger small">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12 mt-1 mb-3">
                    <label for="description">Descrizione</label>
                    <textarea wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                    <span class="text-danger small">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12 mt-1 mb-3">
                    <label for="price">Prezzo</label>
                    <input wire:model="price" type="number" step="0.01"  class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                    <span class="text-danger small">{{$message}}</span>
                    @enderror
                </div>
                {{-- elenco categorie disponibili --}}
                <div class="row d-flex align-items-end">
                    <div class="col-12 mt-1 mb-3">
                        <label for="category">Categoria</label>
                        <select wire:model.defer="category" id="category" class="form-control @error('category') is-invalid @enderror">
                            <option value="">Scegli la categoria</option>
                            @foreach ($categories as $category)"
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-1">
                        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror">
                        <div>@if ($images)
                            Photo Preview:
                            <img src="{{ $image->temporaryUrl() }}">
                        @endif</div>
                        @error('temporary_images.*')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-1 mb-3">
                        <button type="submit" class="btn brand-dark-bg brand-white my-3">Crea</button>
                    </div>
                </div>
            </form>

       
        
    </div>
    
</div>