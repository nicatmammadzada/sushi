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
                            <img id="product_image" src="/front/style/my_style/img/s3.png" alt="" class="modal-img">
                        </div>

                    </div>
                    <div class=" modal-body-product">
                        <div class="product-about-modal">

                            <h4 class="modal-product-name">
                                {{$product->name}}
                            </h4>
                            <p class="small-pors" id="product_name">
                                {!! $product->ingredient ?? '' !!}
                            </p>
                            <p class="group inner list-group-item-text">
                                {!! $product->description ?? '' !!}</p>

                            <div class="price-cost">
                                @if($product->discountprice)
                                    <p class="lead cost-sale"> {{$product->price }}AZN</p>
                                    <p class=" lead ela ml-2 js-prce"> {{$product->discountprice }} AZN</p>
                                @else
                                    <p class="lead cost-sale"> {{$product->price }}AZN</p>
                                @endif
                            </div>
                            <div class="mehsulun-sayi-modal neew">
                                <div class="mehsul-sayi-title">
                                    Məhsul sayı
                                </div>
                                <div class="modal-product-sayi-dicrise">
                                    <button class="btn modal-increse" id="decrease" onclick="decreaseValue()"
                                            value="Decrease Value">–
                                    </button>


                                    <input class="modal-sayi" type="text" id="quantity" name="quantity"
                                           value="1"/>
                                    <button class="btn modal-decrese" id="increase" onclick="increaseValue()"
                                            value="Increase Value">+
                                    </button>
                                </div>
                            </div>
                            <div class="modal-sebete-elave-et-div mt-2">
                                <button class="sebete-elave-et-m btn" onclick="addCart({{$product->id}})">
                                    <img class="sebte fa-shopping-basket" src="/front/style/my_style/img/canta.png"
                                         alt="">
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










