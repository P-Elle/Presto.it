<div class="row brand-top mb-0 g-3 justify-content-center d-flex">
    <div class="col-12 col-md-6 brand-grey-bg mx-0 mt-5 px-5 not-overlapping create">
        <h1 class="my-3 text-center">{{__('ui.create')}}</h1>     

        <form wire:submit.prevent="store">
            @csrf
            <div class="col-12 mt-1 mb-3">
                <label for="title">{{__('ui.title')}}</label>
                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    <span class="text-danger small">{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 mt-1 mb-3">
                <label for="description">{{__('ui.description')}}</label>
                <textarea wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description')
                    <span class="text-danger small">{{$message}}</span>
                @enderror
            </div>
            <div class="col-12 mt-1 mb-3">
                <label for="price">{{__('ui.price')}}</label>
                <input wire:model="price" type="number" step="0.01"  class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    <span class="text-danger small">{{$message}}</span>
                @enderror
            </div>
            {{-- elenco categorie disponibili --}}
            <div class="row d-flex align-items-end">
                <div class="col-12 mt-1 mb-3">
                    <label for="category">{{__('ui.category')}}</label>
                    <select wire:model.defer="category" id="category" class="form-control @error('category') is-invalid @enderror">
                        <option value="">{{__('ui.choose')}}</option>                            
                        @foreach ($categories as $category)"
                            <option value="{{ $category->id }}">
                                @if (App::isLocale('it'))
                                    {{($category->name)}}
                                @elseif (App::isLocale('en'))
                                    {{($category->name_en)}}
                                @elseif (App::isLocale('es'))
                                    {{($category->name_es)}}
                                @endif

                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="text-danger small">{{$message}}</span>
                    @enderror
                </div>
                @if (!empty($images))

                    <div class="col-12 mt-1 preview-box">
                        <p>{{__('ui.preview')}}</p>                             
                        <div x-data="{images: @entangle('images')}" wire:sortable="updateImageOrder" class="row mx-auto rounded py-4 brand-white-bg" x-init="() => {
                            const container = document.querySelector('[wire\\:sortable]')
                            const sortable = new Sortable(container, {
                                draggable: '.image-container',
                                handle: 'img',
                            })
                        }">


                            @foreach ($images as $key => $image)

                                <div class="image-preview mx-auto" wire:sortable.item="{{$key}}" wire:key="image-{{$key}}" wire:sortable.handle style="background-image: url({{$image->temporaryUrl()}});">
                                    <button type="button" class="btn remove m-0 p-0 border-0" wire:click="removeImage({{$key}})"><i class="bi bi-x-circle-fill"></i></button>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endif


                <div class="col-12 mt-1 mb-3">
                    <label for="temporary_images">{{__('ui.jpg')}}</label>
                    <input wire:model="temporary_images" type="file" id="temporary_images" name="images" multiple class="form-control">
                    @error('temporary_images.*')
                        <span class="text-danger small">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-12 mt-1 mb-3">
                    @if(session('message'))
                        <div class="alert alert-success my-2">{{session('message')}}</div>
                    @endif
                    <button type="submit" class="btn brand-dark-bg brand-white my-3">{{__('ui.create2')}}</button>                    
                </div>
            </div>
        </form>
        
    </div>

</div>
