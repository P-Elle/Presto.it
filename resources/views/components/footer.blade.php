{{-- <div class="container-fluid mt-4 p-5 bg-dark text-light">
    <div class="row">
        <div class="col-12 text-center">
            <p>Presto.it</p>
            <p>Vuoi lavorare con noi?</p>
            <p>Registrati e clicca qui</p>
            <a href="{{route('become.revisor')}}" class="btn btn-warning text-light shadow my-3">
            Diventa revisore</a>
        </div>
    </div>
</div> --}}
<div>
<footer class="footer-10 mt-5">
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
                            <span>Strada S. Giorgio Martire, 2D, 70124 Bari (BA)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row ps-md-5 justify-content-center">
                    <div class="col-10 mx-auto col-md-3 mb-md-0 mb-4">
                        <h2 class="footer-heading">About</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{route('wip')}}" class="d-block">La nostra storia</a></li>
                            <li><a href="{{route('wip')}}" class="d-block">Contatti</a></li>
                            <li><a href="{{route('wip')}}" class="d-block">Il nostro Team</a></li>
                            <li><a href="{{route('work.with.us')}}" class="d-block">Lavora con noi</a></li>
                        </ul>
                    </div>
                    <div class="col-10 mx-auto col-md-3 mb-md-0 mb-4">
                        <h2 class="footer-heading">Categorie</h2>
                        <ul class="list-unstyled">
                            @foreach ($categories as $category)
                             <li><a href="{{ route('category.view',$category) }}" class="d-block">{{ $category->name }}</a></li>
                            @endforeach

                        </ul>   
                    </div>
           
                    
                    <div class="col-10 mx-auto col-md-3 mb-md-0 mb-4">
                        <h2 class="footer-heading">Risorse</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{route('wip')}}" class="d-block">Blog</a></li>
                            <li><a href="{{route('wip')}}" class="d-block">Newsletter</a></li>
                            <li><a href="{{route('wip')}}" class="d-block">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-5 mb-md-0 mb-4">
                <h2 class="footer-heading">Newsletter</h2>
                @csrf
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control rounded-left" placeholder="Inserisci la tua email">
                        <button type="submit" class="form-control submit rounded-right">Sottoscrivi</button>
                    </div>
                    <span class="subheading">Ricevi le ultime novità sulla tua email</span>
                </form>
            </div> --}}
        </div>
    </div>
    {{-- parte sotto --}}
    <div class="row mb-5 pt-4 border-top brand-cool-bg">
        <div class="col-md-6 col-lg-8 mb-md-0 mb-4">
            <p class="brand-grey ms-5">© 2023 Presto.it, by Scrumming Heads. Tutti i diritti riservati</p>
        </div>
        <div class="col-md-6 col-lg-4 text-md-right">
            <ul class="ftco-footer-social p-0">
                <li class="ftco-animate"><a href="{{route('wip')}}" data-toggle="tooltip" data-placement="top"
                        title="Twitter"><span class="ion-logo-twitter"><i class="bi bi-twitter brand-white"></i></span></a></li>
                <li class="ftco-animate"><a href="{{route('wip')}}" data-toggle="tooltip" data-placement="top"
                        title="Facebook"><span class="ion-logo-facebook"><i class="bi bi-facebook brand-white"></i></span></a></li>
                <li class="ftco-animate"><a href="{{route('wip')}}" data-toggle="tooltip" data-placement="top"
                        title="Instagram"><span class="ion-logo-instagram"><i class="bi bi-instagram brand-white"></i></span></a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</footer>
</div>