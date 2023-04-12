<div class="row justify-content-center">
    <div class="col-12 col-md-8 brand-cool-bg p-2">
        <form action="{{route('announcements.search')}}" method="GET">

            <div class="row justify-content-center">
                
                    <div class="col-12 col-md-5 pe-md-0">
                        <input type="search" name="searched" class="form-control" value="{{old('searched')}}">
                    </div>
                    <div class="col-12 col-md-5 py-2 py-md-0">
                        <select class="form-select" name="searchCategory">
                            <option value="0">Categorie</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                                @if((session()->get('searchCategory')) == $category->id)
                                selected
                                @endif
                                >{{$category->name}}</option>
                            @endforeach
                            

                        </select>
                    </div>
                    <div class="col-12 col-md-2 ps-md-0 d-flex">
                        <button class="btn brand-dark-bg brand-white flex-fill" type="submit" id="searchBtn">Search</button>
                    </div>
                    
                    
                
            </div>
        </form>
    </div>
</div>