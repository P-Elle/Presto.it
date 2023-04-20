<div class="row brand-top mb-0 g-3 justify-content-center d-flex">
    <div class="col-12 col-md-6 brand-grey-bg mx-0 px-5 not-overlapping">
        <h1 class="my-3 text-center">{{__('ui.create')}}</h1>
        @if(session('message'))
            <div class="alert alert-success my-2">{{session('message')}}</div>
        @endif

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
                        <label for="category">{{__('ui.cateory')}}</label>
                        <select wire:model.defer="category" id="category" class="form-control @error('category') is-invalid @enderror">
                            <option value="">{{__('ui.choose')}}</option>
                            @foreach ($categories as $category)"
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>

                    @if (!empty($images))
                    
                    <div class="col-12 mt-1 preview-box">
                        <p>Anteprima immagini:</p>
                        <div  wire:sortable="updateImageOrder" class="row mx-auto rounded py-4 brand-white-bg">
                       
                    

                            @foreach ($images as $key => $image)

                                    <div class="image-preview mx-auto" draggable="true" wire:sortable.item="{{$key}}" wire:key="image-{{$key}}" wire:sortable.handle style="background-image: url({{$image->temporaryUrl()}});">
                                        <button type="button" class="btn remove m-0 p-0 border-0" wire:click="removeImage({{$key}})"><i class="bi bi-x-circle-fill"></i></button>
                                        {{-- <button wire:sortable.handle>drag</button> --}}
                                    </div>
                                 

                                
                                
                            @endforeach
                           
                        </div>
                   
                    
                   </div>
                @endif
                
            
               <div class="col-12 mt-1 mb-3">
                   <label for="temporary_images">{{__('ui.jpg')}}</label>
                   <input wire:model="temporary_images" type="file" name="images" multiple class="form-control">
                   @error('temporary_images.*')
                   <span class="text-danger small">{{$message}}</span>
                   @enderror
               
               <div class="col-12 mt-1 mb-3">
                   <button type="submit" class="btn brand-dark-bg brand-white my-3">{{__('ui.create2')}}</button>
               </div>
           </div>
       </form>

  
   
</div>

</div>









                   
                            








                               






