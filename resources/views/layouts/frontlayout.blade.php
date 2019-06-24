<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Rolex template">
    <meta name="keywords" content="Rolex, template">
    <meta name="author" content="Neville Verleye">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300,400,700" rel="stylesheet">
    <link rel="icon" href="{{asset('faviconlogorolex.ico')}}" type="image/png" sizes="16x16">
    <title>Rolex</title>
</head>
<body>
<div class="container-fluid p-0">
    <section id="navigatie" class="row">
        <div class="col-12 d-fixed-top p-0">
            <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
                <a class="navbar-brand text-center ml-2" href="{{route('rolex')}}"><img class="logo img-fluid" src="{{asset('images/assets/rolex_logomettekst.png')}}" alt="Rolex logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarid" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon custom-toggler"></span>
                </button>
                <div class="collapse navbar-collapse navlijst" id="navbarid">
                    <ul class="navbar-nav ml-auto text-center text-lg-left">
                        <li class="nav-item active">
                            <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('rolex')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('classic')}}">Klassiek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('professional')}}">Professioneel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('shop')}}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i>
                                {!!Cart::count() != 0 ? '<sup class="text-warning">'.Cart::count().'</sup>':''!!}
                            </a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                @if ($user=Auth::user())
                                    @if($user->role_id == 1 && $user->is_active == 1)
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('admin')}}">Admin</a>
                                        </li>
                                    @endif
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link text-uppercase text-white px-0 mx-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" href="{{ route('profile.index') }}">
                                                Profiel
                                            </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </form>
                                        </div>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('login') }}"><i class="fas fa-sign-in"></i>Login</a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase text-white px-0 mx-2" href="{{route('register') }}"><i class="fas fa-sign-in"></i>Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    @yield('content')

    <footer>
{{--        FOOTER SMALL + LARGE--}}
        <div class="row rolexfooter d-md-none d-lg-block p-3">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="row">
                    <div class="col-lg-4 footerblok">
                        <h6 class="text-uppercase">Rolex-horloges</h6>
                        <ul>
                            <li><a href="#">Rolex-horloges</a></li>
                            <li><a href="#">Nieuwe horloges 2019</a></li>
                            <li><a href="{{route('classic')}}"><i class="fas fa-mug-hot footerlogo"></i> Klassieke horloges</a></li>
                            <li><a href="{{route('professional')}}"><i class="fas fa-bolt footerlogo"></i> Professionele horloges</a></li>
                            <li><a href="#">Over Rolex-horloges</a></li>
                        </ul>
                        <h6 class="text-uppercase">Services</h6>
                        <ul>
                            <li><a href="#"><i class="fas fa-clock footerlogo"></i>Een Rolex bezitten</a></li>
                            <li><a href="#"><i class="fas fa-heart footerlogo"></i>Uw verlanglijst</a></li>
                            <li><a href="#"><i class="fas fa-question-circle footerlogo"></i>Veelgestelde vragen</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 footerblok">
                        <h6 class="text-uppercase">De collectie</h6>
                        <ul>
                            <li><a href="#">Air-King</a></li>
                            <li><a href="#">Cellini</a></li>
                            <li><a href="#">Cosmograph Daytona</a></li>
                            <li><a href="#">Datejust</a></li>
                            <li><a href="#">Explorer</a></li>
                            <li><a href="#">Milgauss</a></li>
                            <li><a href="#">Pearlmaster</a></li>
                            <li><a href="#">Sea-Dweller</a></li>
                            <li><a href="#">Sky-Dweller</a></li>
                            <li><a href="#">Submariner</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 footerblok">
                        <h6 class="text-uppercase">Officiële kanalen</h6>
                        <ul>
                            <li><a href="https://www.facebook.com/rolex"><i class="fab fa-facebook-f footerlogo"></i>Facebook</a></li>
                            <li><a href="https://www.instagram.com/rolex/"><i class="fab fa-instagram footerlogo"></i>Instagram</a></li>
                            <li><a href="https://twitter.com/rolex"><i class="fab fa-twitter footerlogo"></i>Twitter</a></li>
                            <li><a href="https://www.youtube.com/rolex"><i class="fab fa-youtube footerlogo"></i>Youtube</a></li>
                            <li><a href="https://www.pinterest.com/rolex/"><i class="fab fa-pinterest-p footerlogo"></i>Pinterest</a></li>
                        </ul>
                        <h6 class="text-uppercase">Wettelijke vermeldingen</h6>
                        <ul>
                            <li><a href="#">Gebruiksvoorwaarden</a></li>
                            <li><a href="#"><i class="fas fa-user-secret footerlogo"></i>Privacyverklaring</a></li>
                            <li><a href="#"><i class="fas fa-cookie-bite footerlogo"></i>Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
{{--        FOOTER MEDIUM--}}
        <div class="row rolexfooter d-none d-md-block d-lg-none">
            <div class="col-12 col-lg-6 offset-lg-3 ml-2 pt-2">
                <div class="row">
                    <div class="col-md-6 col-lg-4 footerblok">
                        <h6 class="text-uppercase">De collectie</h6>
                        <ul>
                            <li><a href="#">Air-King</a></li>
                            <li><a href="#">Cellini</a></li>
                            <li><a href="#">Cosmograph Daytona</a></li>
                            <li><a href="#">Datejust</a></li>
                            <li><a href="#">Explorer</a></li>
                            <li><a href="#">Milgauss</a></li>
                            <li><a href="#">Pearlmaster</a></li>
                            <li><a href="#">Sea-Dweller</a></li>
                            <li><a href="#">Sky-Dweller</a></li>
                            <li><a href="#">Submariner</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 footerblok">
                        <h6 class="text-uppercase">Rolex-horloges</h6>
                        <ul>
                            <li><a href="#">Rolex-horloges</a></li>
                            <li><a href="#">Nieuwe horloges 2018</a></li>
                            <li><a href="{{route('classic')}}"><i class="fas fa-mug-hot footerlogo"></i> Klassieke horloges</a></li>
                            <li><a href="{{route('professional')}}"><i class="fas fa-bolt footerlogo"></i> Professionele horloges</a></li>
                            <li><a href="#">Over Rolex-horloges</a></li>
                        </ul>
                        <h6 class="text-uppercase">Services</h6>
                        <ul>
                            <li><a href="#"><i class="fas fa-clock" style="width: 18px;"></i>Een Rolex bezitten</a></li>
                            <li><a href="#"><i class="fas fa-heart" style="width: 18px;"></i>Uw verlanglijst</a></li>
                            <li><a href="#"><i class="fas fa-question-circle" style="width: 18px;"></i>Veelgestelde vragen</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 footerblok">
                        <h6 class="text-uppercase">Officiële kanalen</h6>
                        <ul>
                            <li><a href="https://www.facebook.com/rolex"><i class="fab fa-facebook-f" style="width: 18px;"></i>Facebook</a></li>
                            <li><a href="https://www.instagram.com/rolex/"><i class="fab fa-instagram" style="width: 18px;"></i>Instagram</a></li>
                            <li><a href="https://twitter.com/rolex"><i class="fab fa-twitter" style="width: 18px;"></i>Twitter</a></li>
                            <li><a href="https://www.youtube.com/rolex"><i class="fab fa-youtube" style="width: 18px;"></i>Youtube</a></li>
                            <li><a href="https://www.pinterest.com/rolex/"><i class="fab fa-pinterest-p" style="width: 18px;"></i>Pinterest</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 footerblok">
                        <h6 class="text-uppercase">Wettelijke vermeldingen</h6>
                        <ul>
                            <li><a href="#">Gebruiksvoorwaarden</a></li>
                            <li><a href="#">Privacyverklaring</a></li>
                            <li><a href="#">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>