<!-- Footer -->
<footer class="page-footer font-small indigo">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class=" col-md-3 col-xl-3 mx-auto ">
                <a href="">
                    <div class="place-logo left-logo">
                        <img src="/front/style/my_style/img/font deyisdi yasil.png" alt="">
                    </div>
                </a>
            </div>
            <div class=" col-md-6 col-xl-6 mx-auto new-link">
                <div class="footer-links align-content-center flex-wrap">
                    <ul class="list-unstyled">
                        <li>
                            <a class="link-foot " href="#!">SUSHI</a>
                        </li>
                        <li>
                            <a class="link-foot" href="#!">SALADS</a>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li>
                            <a class="link-foot" href="#!"> SANDWISCHES AND WARPS</a>
                        </li>
                        <li>
                            <a class="link-foot" href="#!">TAIYAKI</a>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li>
                            <a class="link-foot" href="#!">DRINKS</a>
                        </li>
                        <li>
                            <a class="link-foot" href="#!">ÇATDIRILMA</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-6  mx-auto footer-mobob">
                <div class="app-store-al">

                    <ul class="list-unstyled">
                        <li>
                            <a class="vakansiya" href="#!">Əlaqə</a>
                        </li>
                        <li>
                            <a class="vakansiya" href="#!">Çatdırılma</a>
                        </li>
                        <li>
                            <a class="vakansiya" href="#!">Vakansiyalar</a>
                        </li>
                        <li>
                            <a class="vakansiya" href="#!">Haqqımızda</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 col-lg-3 mx-auto">
                <div class="text-center">
                    <div class="call-do-that mb-3">
                        <button class="do-call" data-toggle="modal" data-target="#zengsifaris"><i
                                class="fas fa-phone-volume mr-1"></i>Zəng tələb edin</button>
                    </div>
                    <div class="phone-number-header text-white mb-2">
                        (050) 505 05 05
                    </div>
                    <a class="href-link mr-1 ml-1 d-inline" href="">
                        <img class="app-store" src="/front/style/my_style/img/facebook (2).png" alt="">
                    </a>
                    <a class="href-link mr-1 ml-1 d-inline" href="">
                        <img class="app-store" src="/front/style/my_style/img/instagram (2).png" alt="">
                    </a>
                    <a class="href-link mr-1 ml-1 d-inline" href="">
                        <img class="app-store" src="/front/style/my_style/img/twitter (2).png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href=""> Jugaad.az</a>
    </div>
</footer>



<!-- zeng sifaris et modal -->
<div class="modal animate__animated  fade animate__rotateInDownRight" id="zengsifaris" data-backdrop="static"
     data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="staticBackdropLabel">Bizimlə Əlaqə</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adı</label>
                        <input type="text" class="form-control" placeholder="Ad" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobil nömrə</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="+994">
                    </div>
                    <div class="form-group">
                            <textarea name="text" placeholder="Text..." class="form-control" id="exampleInputPassword1"
                                      id="" cols="30" rows="3"></textarea>
                    </div>
                    <div class="call-do-that text-center">
                        <button class="do-call">Zəng tələb
                            edin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Giris -->
<div class="modal fade animate__animated  fade animate__rotateInDownRight" id="giris" data-backdrop="static"
     data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="staticBackdropLabel">Daxil ol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('login')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email </label>
                        <input name="email" type="text" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Parol</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberme">
                        <label class="form-check-label" for="exampleCheck1">Yadda saxla</label>
                    </div>
                </div>
                <div class="giris-div">
                    <button type="submit" class="btn login-button">Daxil ol</button>
                    <div class="qeydiyyat-email">
                        <a href="{{route('register')}}" class="qeyddiyat-adresi mr-3">Qeydiyyat</a>
                        <a href="reset.html" class="parol-adresi">Parolu xatırlamırsınız?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- sebet modal -->
<div class="modal fade animate__animated  animate__zoomInDown" id="sebet" data-backdrop="static"
     data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-bod ">
                <div class="">
                    <div class="asas">
                        <div class="modal-body-img-p">
                            <div class="modal-sebet-img-div">
                                <img  id="product_image" src="/front/style/my_style/img/s3.png" alt="" class="modal-img">
                            </div>

                        </div>
                        <div class=" modal-body-product">
                            <div class="product-about-modal">

                                <h4 class="modal-product-name">
                                    Seth Philadelphia
                                </h4>
                                <p class="small-pors" id="product_name">
                                    1,240 g
                                    <span class="five-part-line">|</span>
                                    5 hissə
                                    <span class="five-part-line">|</span>
                                    90 kkal
                                </p>
                                <p class="group inner list-group-item-text">
                                    Klassik Filadelfiya, Filadelfiya lüksü, Kyoto,Xiyar ilə Filadelfiya, yaşıl soğan ilə
                                    Filadelfiya</p>

                                <div class="price-cost">
                                    <p class="lead cost-sale"> 21.00 AZN</p>
                                    <p class=" lead ela ml-2 js-prce">19.00 AZN</p>
                                </div>
                                <div class="mehsulun-sayi-modal neew">
                                    <div class="mehsul-sayi-title">
                                        Məhsul sayı
                                    </div>
                                    <div class="modal-product-sayi-dicrise">
                                        <button class="btn modal-increse" id="decrease" onclick="decreaseValue()"
                                                value="Decrease Value">–</button>


                                        <input class="modal-sayi" type="text" id="quantity" name="quantity"
                                               value="1" />
                                        <button class="btn modal-decrese" id="increase" onclick="increaseValue()"
                                                value="Increase Value">+</button>
                                    </div>
                                </div>
                                <div class="modal-sebete-elave-et-div mt-2">
                                    <button class="sebete-elave-et-m btn" >
                                        <img class="sebte fa-shopping-basket" src="/front/style/my_style/img/canta.png" alt="">
                                        Səbətə əlavə et
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
