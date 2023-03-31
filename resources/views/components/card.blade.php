<div class="card px-0 " style="width: 18rem;">
    <div class="c-header">
        <img src="https://picsum.photos/300/300" class="img-fluid w-100" alt="foto-annuncio">
        <span class="btn c-category">{{$announcement->category->name}}</span>

    </div>
    <div class="card-body z-ind white-brand-bg">
        <span class="price">{{$announcement->price}}</span>
        <h4 class="mt-2"><a class="link-announcement" href="{{route('announcements.show', $announcement)}}">{{$announcement->title}}</a></h4>
        <p>{{$announcement->body}}</p>
    </div>
    <div class="card-footer small p-2">
        <div class="row">
            <div class="col-6 text-center text-secondary">{{$announcement->created_at->format('d/m/Y')}}</div>
            <div class="col-6 text-center text-secondary">{{$announcement->created_at->format('d/m/Y')}}</div>
        </div>
    </div>
</div>
