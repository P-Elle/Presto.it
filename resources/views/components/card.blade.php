<div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center" data-aos="flip-up">
    <div class="card brand-alpha px-0 my-4 rounded-0" style="width: 15rem;">
        <div class="c-header">
            <img src="{{!$announcement->images()->get()->isEmpty() ? {{--Storage::url($announcement->images()->first()->path)--}} 
            $announcement->images()->first()->watermark() : 'https://picsum.photos/800/800'}}" class="img-fluid w-100" alt="foto-annuncio"> 
            <span class="btn rounded-1 c-category brand-grey brand-trasp-cool-bg"><a href="{{route('category.view', $announcement->category)}}">
                @if (App::isLocale('it'))
                    {{($announcement->category->name)}}
                @elseif (App::isLocale('en'))
                    {{($announcement->category->name_en)}}
                @elseif (App::isLocale('es'))
                    {{($announcement->category->name_es)}}
                @endif
                
            </a></span>

        </div>
        <div class="card-body z-ind brand-grey-bg ps-0">
            
        </div>
        <div class="card-body-text  brand-cool-bg ps-0">
            <h4><a class="link-announcement brand-grey" href="{{route('announcements.show', $announcement)}}">{{$announcement->title}}</a></h4>
            <div class="price brand-grey mb-3">{{$announcement->price}} €</div>
            <a class="brand-grey" href="{{route('category.view', $announcement->category)}}">
                @if (App::isLocale('it'))
                    {{($announcement->category->name)}}
                @elseif (App::isLocale('en'))
                    {{($announcement->category->name_en)}}
                @elseif (App::isLocale('es'))
                    {{($announcement->category->name_es)}}
                @endif
                
                </a>
        </div>
       
        {{-- <div class="card-footer small p-2">
            <div class="row">
                <div class="col-6 text-center text-secondary">{{$announcement->user->name}}</div>
                <div class="col-6 text-center text-secondary">{{$announcement->created_at->format('d/m/Y')}}</div>
            </div>
        </div> --}}
    </div>
</div>
