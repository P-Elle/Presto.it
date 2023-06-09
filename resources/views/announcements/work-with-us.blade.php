<x-main>
    <x-navbar/>
    <div class="container-fluid brand-bg">
        <div class="row container-success mx-auto">

            @if(session('message'))
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                </svg>
                <div class="alert d-flex align-items-center success-box white-brand-bg py-0" role="alert">
                    <svg class="bi flex-shrink-0 me-2 brand" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        <h4 class="alert-heading">{{session('message')}}</h4>
                        <p>{{__('ui.soon')}}</p>
                        <hr>
                        <a href="{{route('announcements.index')}}" class="btn brand-light-bg brand-grey">{{__('ui.explore')}}</a>
                    </div>
                </div>
            @endif

            <div class="col-6 container-work ">
                <div class="row text-center my-5">
                    <h1 class="display-3">{{__('ui.become')}}</h1>
                    <h3>{{__('ui.home')}}</h2>
                    <p class="mt-3">{{__('ui.form')}}</p>
                </div>

                <form action="{{route('become.revisor')}}" method="POST" class="brand-dark form-work" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('ui.name')}}</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Mario">
                        @error('name')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">{{__('ui.surname')}}</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Rossi">
                        @error('last_name')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('ui.mail')}}</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="info@example.com">
                        @error('email')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">{{__('ui.presentati')}}</label>
                        <textarea class="form-control" name="body" id="body" cols="30" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn brand-dark-bg brand-white my-3">{{__('ui.send')}}</button>
                </form>


            </div>
            <div class="col-6 img-work"></div>
        </div>
    </div>
</x-main>
