<!-- head -->
<header class="sticky-top">
    <div class="container-fluid">
        <div class="header ">
            <div class="header-sushi">
                <div id="left-place" class="left-place">
                    <div class="humburger-menu">
                        <img id="open-menu" class="ml-1 mr-1 icon-img " onclick="myFunctionaaa()"
                             src="/front/style/my_style/img/open-menu.png" alt="">
                        <img id="close-menu" class="ml-1 mr-1 icon-img " onclick="myFunctionaaa()"
                             src="/front/style/my_style/img/close.png" alt="">
                        <div id="salam-menu-hover" class="menu-mobile-hover animate__animated animate__fadeInLeft">
                            <ul class="nav ">
                                <li class="nav-item pl-4 pr-2 mt-2 pb-3">
                                    <form method="" action="" class="search-form">
                                        <input type="text" name="word" class="global-search" placeholder="Axtar...">
                                        <button type="submit" class="search-button"><img class="ml-1 mr-1 icon-seach"
                                                                                         src="/front/style/my_style/img/search.png"
                                                                                         alt=""></button>
                                    </form>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="product.html">
                                        <img class=" mr-1 icon-img" src="/front/style/my_style/img/1 icon.png"
                                             alt="sushi phone">
                                        SUSHI
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="product.html">
                                        <img class="mr-1 icon-img" src="/front/style/my_style/img/2 icon.png"
                                             alt="sushi phone">
                                        SALADS
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="product.html">
                                        <img class="mr-1 icon-img" src="/front/style/my_style/img/5 icon.png"
                                             alt="sushi phone">
                                        SANDWISCHES & WARPS
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="product.html">
                                        <img class="mr-1 icon-img" src="/front/style/my_style/img/4 icon.png"
                                             alt="sushi phone">
                                        TAIYAKI
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="product.html">
                                        <img class="mr-1 icon-img" src="/front/style/my_style/img/3 icon.png"
                                             alt="sushi phone">
                                        DRINKS
                                    </a>
                                </li>

                                <div class="mobile-line-opne"></div>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">MENYU FAYLINI YÜKLƏ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">ƏLAQƏ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">ÇATDIRILMA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">VAKANSİYALAR</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">Haqqımızda</a>
                                </li>
                                <li class="nav-item mob-language">
                                    @foreach($langs as $key)
                                        <a class="nav-link text-uppercase"
                                           href="{{route('choose.lang',$key->dil)}}">{{mb_strtoupper($key->dil)}}</a>
                                    @endforeach
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="city-baku cursor-pointer">
                        <img class="ml-2 mr-2 icon-img yukle" src="/front/style/my_style/img/menu.png" alt="">
                        <span class="mobile-text-n">Menu yüklə</span>
                    </div>
                    <div class="dropdown  ml-3">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="ml-1 mr-1 icon-img" src="/front/style/my_style/img/global.png" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach($langs as $key)
                                <a class="dropdown-item" href="{{route('choose.lang',$key->dil)}}"> <img
                                        class="ml-1 mr-1 icon-img pb-1"
                                        src="{{asset('/front/style/my_style/img/').'/'.$key->flag}}"
                                        alt=""><span> {{mb_strtoupper($key->dil)}} </span></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="header-nav-menu mobile-text-n">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link " href="">Əlaqə</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Çatdırılma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Vakansiyalar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Haqqımızda</a>
                        </li>
                    </ul>
                </div>
                <div class="right-place">
                    <a class="mob-phone">
                        <img class="ml-1 mr-3 icon-img" src="/front/style/my_style/img/telefon.png" alt="sushi phone">
                    </a>
                    <img class="ml-1 mr-1 icon-img mobile-click-search" onclick="searchq()"
                         src="/front/style/my_style/img/lupa.png" alt="">
                    <div id="sea" class="animate__animated animate__fadeInDown">
                        <form method="" action="" class="search-form">
                            <input type="text" name="word" class="global-search" placeholder="Axtar...">
                            <button type="submit" class="search-button"><img class="ml-1 mr-1 icon-seach"
                                                                             src="/front/style/my_style/img/search.png"
                                                                             alt=""></button>
                        </form>
                    </div>
                    <a class="mr-1 bn" data-toggle="modal" data-target="#giris">
                        <img class="ml-1 mr-1 icon-img" src="/front/style/my_style/img/mascot.png" alt="sushi person">
                        <a class="cursor-pointer " href="" data-toggle="modal" data-target="#giris"><span
                                class="mobile-text-n">Giriş</span></a>
                    </a>


                    @auth
                        <a class="mr-1 bn" >

                            <a class="cursor-pointer " href="{{route('logout')}}" ><span
                                    class="mobile-text-n">My account</span></a>
                        </a>
                    @endauth


                    <a class="ml-2 " href="sebet.html">
                        <img class="ml-3 mr-1 icon-img sebet-iis" src="/front/style/my_style/img/canta.png"
                             alt="sushi sebet">
                        <a href="{{route('basket.index')}}">
                            <span class="mobile-text-n">Səbət</span>
                            <div class="shoping-product-num"
                                 id="cartcount">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</div>
                        </a>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- header -->
<div class="time-logo-section">
    <div class="container-fluid">
        <div class="time-three-section-col">
            <div class="place-open-close-time text-center">
                <div class="all-day ">
                    Hər gün
                </div>

                <div class="all-day-icon">
                    <img src="/front/style/my_style/img/clock.png" alt="">
                </div>
                <div class="all-time time-10-18">
                    <span class="text-white">***</span> 10:00-23:00
                    <span class="text-white">***</span>
                </div>
            </div>

            <a href="{{route('home')}}">
                <div class="place-logo">
                    <img src="/front/style/my_style/img/the bakuer tek.png" alt="">
                </div>
            </a>
            <div class="place-phone-user text-center">
                <div class="call-do-that">
                    <button class="do-call" data-toggle="modal" data-target="#zengsifaris"><i
                            class="fas fa-phone-volume mr-1"></i>Zəng tələb edin
                    </button>
                </div>
                <div class="phone-number-header">
                    (050) 505 05 05
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class='wave text-center'>
            <div class="wraps-sandiv">Sandwiches, Wraps & Sushi</div>
        </div>
    </div>
</div>

<!-- Navbar -->
<div class="nav-section">
    <div class="container-fluid">
        <div class="five-category-menu">
            <ul class="menu-last">
                @foreach($categorys as $category)
                    <li><a class="href-link"
                           href="{{route('product.index',$category->slug)}}"><span> {{$category->name ?? ''}}</span></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


<!-- mobile kecid -->
<div class="mobile-block mt-3 mb-3">
    <div class="">
        @foreach($categorys as $category)
            <div class="col-12 col-sm-12 mobl-padding">
                <a href="{{route('product.index',$category->slug)}}">
                    <div class="mobile-card">
                        <h2 class="card-mobile-name">
                            {{$category->name ?? ''}}
                        </h2>
                        <img class="card-mobile-img" src="/front/style/my_style/img/s1.png" alt="">
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
