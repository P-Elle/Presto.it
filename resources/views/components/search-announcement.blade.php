<div class="row justify-content-center">
    <div class="col-12 col-md-8 brand-cool-bg p-2">
        <form action="{{route('announcements.search')}}" method="GET">

            <div class="row justify-content-center">
                
                    <div class="col-md-5 pe-sm-0">
                        <input type="search" name="searched" class="form-control" value="{{old('searched')}}">
                    </div>
                    <div class="col-md-5">
                        <select class="form-select" name="searchCategory">
                            <option selected value="0">Categorie</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            

                        </select>
                    </div>
                    <div class="col-md-2 ps-0 d-flex">
                        <button class="btn brand-dark-bg brand-white flex-fill" type="submit">Search</button>
                    </div>
                    
                    
                
            </div>
        </form>
    </div>
</div>