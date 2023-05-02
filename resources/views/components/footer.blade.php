<footer class="footer-10 pt-5">
    <div class="container p-0">
        <div class="row mb-5 pb-3 no-gutters">
            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-1 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-call"><i class="bi bi-telephone"></i></span>
                        </div>
                        <div class="text">
                            <span>(+39) 392 602 46 21</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-2 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-mail"><i class="bi bi-envelope"></i></span>
                        </div>
                        <div class="text">
                            <span>info@presto.it</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-3 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-pin"><i class="bi bi-pin-map"></i></span>

                        </div>
                        <div class="text">
                            <span>Strada S. Giorgio Martire, 2D <br> 70124 Bari (BA)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5 pb-3 no-gutters">
            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-1 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <h2 class="footer-heading text-center">{{__('ui.about')}}</h2>
                            <ul class="list-unstyled text-center">
                                <li><a href="{{route('wip')}}" class="d-block">{{__('ui.story')}}</a></li>
                                <li><a href="{{route('wip')}}" class="d-block">{{__('ui.contact')}}</a></li>
                                <li><a href="{{route('wip')}}" class="d-block">{{__('ui.team')}}</a></li>
                                <li><a href="{{route('work.with.us')}}" class="d-block">{{__('ui.us')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-2 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <h2 class="footer-heading text-center">{{__('ui.categories')}}</h2>
                            <ul class="list-unstyled text-center">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('category.view',$category) }}" class="d-block">
                                            @if (App::isLocale('it'))
                                                {{($category->name)}}
                                            @elseif (App::isLocale('en'))
                                                {{($category->name_en)}}
                                            @elseif (App::isLocale('es'))
                                                {{($category->name_es)}}
                                            @endif 
                                    
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-3 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <h2 class="footer-heading text-center">{{__('ui.resource')}}</h2>
                            <ul class="list-unstyled text-center">
                                <li><a href="{{route('wip')}}" class="d-block">{{__('ui.blog')}}</a></li>
                                <li><a href="{{route('wip')}}" class="d-block">{{__('ui.news')}}</a></li>
                                <li><a href="{{route('wip')}}" class="d-block">{{__('ui.privacy')}}</a></li>
                            </ul>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
       
    </div>




    {{-- parte sotto --}}
    <div class="row mb-5 pt-4 border-top brand-dark-bg">
        <div class="col-12 mb-md-0 mb-4 text-center d-flex flex-column align-items-center justify-content-center">
            <p class="brand-grey">© 2023 Presto.it</p>
            <p class="brand-grey">by The Scrumming Heads.</p>
            <p class="brand-grey">{{__('ui.rights')}}</p>

        </div>

        {{-- icone --}}
        <div class="col-12 text-center d-flex justify-content-center">
            <ul class="ftco-footer-social p-0">
                <li class="ftco-animate p-0"><a href="{{route('wip')}}" data-toggle="tooltip" data-placement="top"
                        title="Twitter"><span class="ion-logo-twitter"><i class="bi bi-twitter brand-white"></i></span></a></li>
                <li class="ftco-animate p-0"><a href="{{route('wip')}}" data-toggle="tooltip" data-placement="top"
                        title="Facebook"><span class="ion-logo-facebook"><i class="bi bi-facebook brand-white"></i></span></a></li>
                <li class="ftco-animate p-0"><a href="{{route('wip')}}" data-toggle="tooltip" data-placement="top"
                        title="Instagram"><span class="ion-logo-instagram"><i class="bi bi-instagram brand-white"></i></span></a>
                </li>
            </ul>
        </div>
    </div>
    
</footer>
