<div class="row justify-content-center search-bar">
    <div class="col-12 col-md-8 px-2">
        <form action="{{route('announcements.search')}}" method="GET">

            <div class="row justify-content-center">

                <div class="col-12 col-md-5 pe-md-0">
                    <input type="search" name="searched" class="form-control" @if(session('searched')) value="{{old('searched')}}" @endif placeholder="{{__('ui.search')}}">
                </div>
                <div class="col-12 col-md-5 py-2 py-md-0">
                    <select class="form-select" name="searchCategory">
                        <option value="0">{{__('ui.allcat')}}</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                                @if((session()->get('searchCategory')) == $category->id)
                                    selected
                                @endif
                            >
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
                </div>
                <div class="col-12 col-md-2 ps-md-0 d-flex">
                    <button class="btn brand-light-bg brand-grey flex-fill" type="submit" id="searchBtn">{{__('ui.search')}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
