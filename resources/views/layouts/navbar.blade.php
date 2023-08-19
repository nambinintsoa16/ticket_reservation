<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> nambinintsoa16@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src=" {{ asset('assets/images/home/logo.png') }} " alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('accueil')}}" class="active">Accueil</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('create_register')}}">Créer compte</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            @if (Route::has('login'))
                                @auth
                                     <li><a href="{{route('accueil')}}"><i class="fa fa-lock"></i>Se connecter</a></li>
                                @else
                                    <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Se connecter</a></li>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->
</header><!--/header-->