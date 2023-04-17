<div class="row justify-content-center search-bar">
    <div class="col-12 col-md-8 p-2">
        <form action="{{route('announcements.search')}}" method="GET">

            <div class="row justify-content-center">

                    <div class="col-12 col-md-5 pe-md-0">
                        <input type="search" name="searched" class="form-control" @if(session('searched')) value="{{old('searched')}}" @endif placeholder="Cerca">
                    </div>
                    <div class="col-12 col-md-5 py-2 py-md-0">
                        <select class="form-select" name="searchCategory">
                            <option value="0">Tutte le categorie</option>
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
                        <button class="btn brand-light-bg brand-grey flex-fill" type="submit" id="searchBtn">Cerca</button>
                    </div>



            </div>
        </form>
    </div>
</div>
