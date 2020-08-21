@extends('front.layouts.master')
@section('content')

    @include('front.layouts.include.slider')

    <!-- list-grid -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 my-3">
                <h1 class="small-pors most-roll color-orange">{{mb_strtoupper( $category->name ?? '')}}</h1>
                <div class="pull-right text-right">
                    <div class="btn-group" id="myTab" role="tablist">
                        <button class="btn active-list-grid" id="grid">
                            <i class="fas fa-th "></i>
                            Grid
                        </button>
                        <button class="btn active-list-grid-white" id="list">
                            <i class="fas fa-list"></i>
                            List
                        </button>
                    </div>
                </div>
                <div class="sevdiyniz-terkb">Sevdiyiniz tərkibli yeməkləri götürə bilərsiniz.</div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div id="products" class="row view-group">

            @if($category->products->count()>0)
                @foreach($category->products as $product)
                    <div class="item col-xs-4 col-md-6 col-xl-4 ">
                        <div class="thumbnail ">
                            <div class="img-event card">
                                <img class="group list-group-image img-fluid" data-toggle="modal" data-target="#sebet"
                                     src="/front/style/my_style/img/s1.png" alt=""/>
                                <div class="pruduct-pirce-button ">
                                    <div class="price-cost">
                                        <p class="lead cost-sale"> {{$product->price}} Azn</p>
                                        <p class=" lead ela ml-2">{{$product->discountprice}} Azn</p>
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
                                        Klassik Filadelfiya, Filadelfiya lüksü, Kyoto,Xiyar ilə Filadelfiya, yaşıl soğan
                                        ilə
                                        Filadelfiya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

    <!-- Bakıda suşi və rulon tədarükü -->
   @include('front.layouts.include.foot-text')
@endsection
