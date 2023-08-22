<header id="header"><!--header-->
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{route('accueil')}}"><img src=" {{ asset('assets/images/home/logo.png') }} " alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @foreach ($parameter['menu']['menu'] as $menu_item)
                                <li><a href="{{route($menu_item['rout'])}}" class="{{ Str::lower($menu_item["text"]) == Str::lower(Request::segment(1)) ? "active" :""}}"><i class="{{$menu_item['icon']}}"></i>{{$menu_item["text"]}}</a></li>
                            @endforeach
                            @if (Route::has('login'))
                                @auth
                                     <li><a href="{{route('logout')}}"><i class="fa fa-lock"></i>se déconnecter</a></li>
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