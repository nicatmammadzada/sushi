@extends('front.layouts.master')
@section('content')

    <!-- sebet -->
    <div class="container-fluid">
        <div class="row mt-5">
            @foreach($products as $key=>$product)
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="sebet-all mt-2 mb-4">
                        <div class="cart_product_body">
                            <img class="sebet-img" src="{{asset("uploads/product/")."/".$product->options->photo}}">
                            <div class="cart_product_props">
                                <div class="cart_product_name">{{$product->name}}</div>
                                <div class="cart_product_size">
                                    {!!$product->options->ingredient ?? ''  !!}
                                </div>
                            </div>
                            <div class="cart_product_count count_block_container">
                                <div class="count_block xQty">
                                    <input type='button' value='-' data-id="{{$product->rowId}}"
                                           onblur="update(this.dataset.id)" class='qtyminus btn btn_orange btn_minus'
                                           field='quantity'/>
                                    <input type='number' name='quantity' id="{{$product->rowId}}"
                                           data-id="{{$product->rowId}}" onblur="update(this.dataset.id)"
                                           value='{{$product->qty}}' class='qtyValue product_count' min="1"/>
                                    <input type='button' value='+' data-id="{{$product->rowId}}"
                                           onblur="update(this.dataset.id)" class='qtyplus btn btn_orange btn_plus'
                                           field='quantity'/>
                                </div>
                            </div>
                            <div class="cart_product_sum cost_picker">
                                <div>
                                    {{$product->subtotal}} AZN
                                </div>
                            </div>
                            <div class="cart_product_delete">
                                <a onclick='checkDeleteConfrim("{{route('basket.destroy',$product->rowId)}}")'
                                   class="btn btn_link btn_delete">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 mt-2">
                <div class="text-right mt-2 mb-4">

                    <div class="mobile-price-sebet">
                        CƏMİ: {{Cart::priceTotal()}} AZN
                    </div>
                    <div class="mobile-sebet-kalory">
                        {{--                        2150 kkal--}}
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- sous -->
    <div class="container-fluid sebet-cont">
        <div class="row">
            <div class="col-12 col-xs-12 col-md-12 col-lg-12 ">
                <h4 class="xardal-elave text-center mt-2 mb-4">
                    Səbətə aşağıdakıları əlavə etməyi unutmamısınızmı?
                </h4>
            </div>
            <div class="item col-xs-4 col-md-6 col-xl-4 ">
                <div class="thumbnail ">
                    <div class="img-event card">
                        <img class="group list-group-image img-fluid" data-toggle="modal" data-target="#sebet"
                             src="/front/style/my_style/img/xar.jpg" alt=""/>
                        <div class="pruduct-pirce-button ">
                            <div class="price-cost">
                                <p class="lead cost-sale"> 21.00 Azn</p>
                                <p class=" lead ela ml-2">19.00 Azn</p>
                            </div>
                            <div class="price-c-button">
                                <button onclick="sweetAlert()" class=" product-sebet">
                                    <img class="sebte fa-shopping-basket" src="/front/style/my_style/img/canta.png"
                                         alt="">
                                    Əlavə et
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="caption card-body ">
                        <div>
                            <h4 class="group  inner list-group-item-heading">Seth Philadelphia</h4>
                            <p class="small-pors">
                                1,240 g
                                <span class="five-part-line">|</span>
                                5 hissə
                                <span class="five-part-line">|</span>
                                90 kkal
                            </p>
                            <p class="group inner list-group-item-text">
                                Klassik Filadelfiya, Filadelfiya lüksü, Kyoto,Xiyar ilə Filadelfiya, yaşıl soğan ilə
                                Filadelfiya</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xs-4 col-md-6 col-xl-4 ">
                <div class="thumbnail ">
                    <div class="img-event card">
                        <img class="group list-group-image img-fluid" data-toggle="modal" data-target="#sebet"
                             src="/front/style/my_style/img/xar1.jpg" alt=""/>
                        <div class="pruduct-pirce-button ">
                            <div class="price-cost">
                                <p class="lead cost-sale"> 21.00 Azn</p>
                                <p class=" lead ela ml-2">19.00 Azn</p>
                            </div>
                            <div class="price-c-button">
                                <button onclick="sweetAlert()" class=" product-sebet">
                                    <img class="sebte fa-shopping-basket" src="/front/style/my_style/img/canta.png"
                                         alt="">
                                    Əlavə et
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="caption card-body ">
                        <div>
                            <h4 class="group  inner list-group-item-heading">Seth Philadelphia</h4>
                            <p class="small-pors">
                                1,240 g
                                <span class="five-part-line">|</span>
                                5 hissə
                                <span class="five-part-line">|</span>
                                90 kkal
                            </p>
                            <p class="group inner list-group-item-text">
                                Klassik Filadelfiya, Filadelfiya lüksü, Kyoto,Xiyar ilə Filadelfiya, yaşıl soğan ilə
                                Filadelfiya</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xs-4 col-md-6 col-xl-4 ">
                <div class="thumbnail ">
                    <div class="img-event card">
                        <img class="group list-group-image img-fluid" data-toggle="modal" data-target="#sebet"
                             src="/front/style/my_style/img/xar2.jpg" alt=""/>
                        <div class="pruduct-pirce-button ">
                            <div class="price-cost">
                                <p class="lead cost-sale"> 21.00 Azn</p>
                                <p class=" lead ela ml-2">19.00 Azn</p>
                            </div>
                            <div class="price-c-button">
                                <button onclick="sweetAlert()" class=" product-sebet">
                                    <img class="sebte fa-shopping-basket" src="/front/style/my_style/img/canta.png"
                                         alt="">
                                    Əlavə et
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="caption card-body ">
                        <div>
                            <h4 class="group  inner list-group-item-heading">Seth Philadelphia</h4>
                            <p class="small-pors">
                                1,240 g
                                <span class="five-part-line">|</span>
                                5 hissə
                                <span class="five-part-line">|</span>
                                90 kkal
                            </p>
                            <p class="group inner list-group-item-text">
                                Klassik Filadelfiya, Filadelfiya lüksü, Kyoto,Xiyar ilə Filadelfiya, yaşıl soğan ilə
                                Filadelfiya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- form -->
    <div class="container-fluid">
        <form method="post" action="{{route('basket.buy')}}">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-12 col-md-10 offset-md-1 offset-lg-2 offset-xl-2 col-xl-8 col-lg-8 ">
                    <div class=" odeme-first">
                        <h3 class="odeme-usel text-center pb-2">
                            Ödəniş üsulu
                        </h3>
                        <div class="odeme-usullari-all">
                            <div class="form-check pb-3">
                                <input class="form-check-input" type="radio" name="payment" id="exampleRadios1"
                                       value="1" checked>
                                <label class="form-check-label ml-1" for="exampleRadios1">
                                    Onlayn ödə
                                </label>
                            </div>
                            <div class="form-check pb-3">
                                <input class="form-check-input" type="radio" name="payment" id="exampleRadios2"
                                       value="2">
                                <label class="form-check-label ml-1" for="exampleRadios2">
                                    Kart kuryer
                                </label>
                            </div>
                            <div class="form-check pb-3">
                                <input class="form-check-input" type="radio" name="payment" id="exampleRadios2"
                                       value="3">
                                <label class="form-check-label ml-1" for="exampleRadios2">
                                    Kuryere nağd pul
                                </label>
                            </div>
                        </div>
                        <div class="kard-odeme text-center">
                            <img class="kart-img" src="/front/style/my_style/img/visa-mastercard.png" alt="">

                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-10 offset-md-1 offset-lg-2 offset-xl-2 col-xl-8 col-lg-8 ">
                    <div class=" odeme-first" id="app">
                        <h3 class="odeme-usel text-center pb-2">
                            Aksiyalar
                        </h3>
                        <div class="odeme-usullari-promo">
                            <div class="form-check pb-3">
                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios1"
                                       value="option1" name="abune">
                                <label class="form-check-label ml-1" for="exampleRadios1">
                                    Aksiyalara abunə olun
                                </label>
                            </div>
                            <div class="form-check pb-3">
                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2"
                                       value="option2">
                                <label class="form-check-label ml-1" for="exampleRadios2">
                                    Promosyon kodu
                                </label>
                            </div>
                        </div>
                        <div class="kard-odeme" >
                            <div class="form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                    <input type="text" name="promocode" class="form-control" id="inputPassword2"
                                     placeholder="promo kod"    v-model="promo.code"   >
                                </div>
                                <button type="submit" class="btn promo-butn mb-2" onclick="return false">Daxil et </button>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Bir promosyon kodu varsa onu daxil
                                edin</small>
                        </div>


                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-10 offset-md-1 offset-lg-2 offset-xl-2 col-xl-8 col-lg-8 ">
                    <div class=" odeme-first">
                        <h3 class="odeme-usel text-center pb-2">
                            Çatdırılmanın vaxtı
                        </h3>
                        <div class="odeme-usullari-promo ">
                            <div class="form-check pb-3">
                                <input class="form-check-input" type="radio" name="customTime" id="exampleRadios1"
                                       value="16:30" checked>
                                <label class="form-check-label ml-1" for="exampleRadios1">
                                    16: 30- dan gec olmayaraq
                                </label>
                            </div>
                            <div class="form-check saaat-sifasis pb-3">
                                <input class="form-check-input" type="radio" name="customTime" id="exampleRadios2"
                                       value="option2">
                                <label class="form-check-label ml-1" for="exampleRadios2">
                                    Saat


                                    <input type="time" name="time1" class="form-c text-center" placeholder="">
                                    <div class="sebet-p-line"></div>
                                    <input class="text-center" name="time2" type="time"
                                           placeholder="">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

<a class="col-12 col-sm-12 col-md-10 offset-md-1 offset-lg-2 offset-xl-2 col-xl-8 col-lg-8" >
  <label>adresi deyish</label>
   <input type="checkbox"   value="0" name="adress" onchange="newAdress(this)">
</a>
               <div class="col-12 col-sm-12 col-md-10 offset-md-1 offset-lg-2 offset-xl-2 col-xl-8 col-lg-8 " id="newAdress" style="display: none;">
                    <div class=" odeme-first" ><span style="float: right;font-size: 19px;">x</span>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h4 class="parol-title text-center">Çatdırılma ünvanı</h4>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ad*</label>
                                    <input type="email" class="form-control" name="name" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Elektron poçt*</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Telefon*</label>
                                    <input type="number" class="form-control" name="phone" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ünvan*</label>
                                    <input type="email" class="form-control" id="country" name="location"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="cps text-right">
                                    <img class="ml-2 mr-2 icon-img" src="/front/style/my_style/img/location.png" alt="">
                                    <a class="text-black" href="">GPS aşkar edin</a>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Küçə / Ev *</label>
                                    <input type="text" class="form-control" id="street" name="street"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mənzil / Ofis</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="home"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kuryer üçün şərhlər</label>
                                    <textarea type="email" class="form-control" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" name="" id="" cols="30" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >

                    @auth
                        <div class="text-center pb-3">
                            <button class="btn promo-butn check-true-green"><i class="fas fa-check"></i></button>
                        </div>
                    @endauth
                    @guest
                            <div class="text-center pb-3"   data-toggle="modal" data-target="#giris">
                                <button disabled class="btn promo-butn check-true-green"><i class="fas fa-check"></i></button>
                                <button disabled class="btn promo-butn check-true-green"><i class="fas fa-check"></i></button>
                            </div>

                    @endguest

                    <div class="text-center mb-3">
                        <small>Sifariş verәrәk , çatdırılma şәrtlәrini vә fәrdi mәlumatların razılaşmasını qәbul
                            edirsiniz</small>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div id="app">
        @{{ message }}

        <input v-model="message">

        @{{ data | json }}


    </div> <!-- end your id="app" -->



@endsection
@section('foot')
    <script src="/front/style/my_style/js/vue.min.js"></script>

    <script>
        function update(id) {
            var url = "/basket/update";
            var qty = document.getElementById(id).value;
            $.ajax({
                url: url,
                data: {"_token": "{{ csrf_token() }}", id: id, qty: qty},
                type: 'POST',
                success: function (response) {
                    // sweetAlert()
                    location.reload()
                }
            });

        }

        $(document).ready(function () {
            $('.qtyplus').click(function (e) {
                e.preventDefault();
                var container = $(this).parents('.xQty');
                fieldName = $(this).attr('field');
                var currentVal = parseInt(container.children(".qtyValue").val());
                var val2 = currentVal + 1;
                if (!isNaN(val2)) {
                    container.children(".qtyValue").val(val2);
                } else {
                    container.children(".qtyValue").val(0);
                }
            });

            $(".qtyminus").click(function (e) {
                e.preventDefault();
                var container = $(this).parents('.xQty');
                fieldName = $(this).attr('field');
                var currentVal = parseInt(container.children(".qtyValue").val());
                if (!isNaN(currentVal) && currentVal > 0) {
                    container.children(".qtyValue").val(currentVal - 1);
                } else {
                    container.children(".qtyValue").val(0);
                }
            });
        });


    </script>


    <script>
        function newAdress(ev) {
            if(ev.checked){
                document.getElementById('newAdress').style.display='block';
                ev.value=1;
            }
            else{
                document.getElementById('newAdress').style.display='none';
                ev.value=0;
            }


        }
    </script>

    <script>


    app=    new Vue({
            el: '#app',
            data: {
                message: 'Hello World'
                ,
                promo: {
                    code:'gfhgfhjgjghjgh'
                }
            }
            ,


        });

    </script>

@endsection
