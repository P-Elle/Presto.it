<div class=" col-12 col-lg-4 col-md-6 d-flex justify-content-center">
    <div class="card brand-alpha px-0 my-4 rounded-0" style="width: 18rem;">
        <div class="c-header">
            <img src="https://picsum.photos/800/800" class="img-fluid w-100" alt="foto-annuncio">
            <span class="btn rounded-1 c-category brand-grey brand-trasp-cool-bg"><a href="{{route('category.view', $announcement->category)}}">{{$announcement->category->name}}</a></span>

        </div>
        <div class="card-body z-ind brand-bg ps-0">
            <h4 class="mt-2"><a class="link-announcement brand-grey" href="{{route('announcements.show', $announcement)}}">{{$announcement->title}}</a></h4>
            <span class="price brand-grey">{{$announcement->price}} €</span>
            <p>{{$announcement->body}}</p>
        </div>
        {{-- <div class="card-footer small p-2">
            <div class="row">
                <div class="col-6 text-center text-secondary">{{$announcement->user->name}}</div>
                <div class="col-6 text-center text-secondary">{{$announcement->created_at->format('d/m/Y')}}</div>
            </div>
        </div> --}}
    </div>
</div>