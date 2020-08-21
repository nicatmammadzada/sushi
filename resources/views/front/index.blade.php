@extends('front.layouts.master')
@section('head')
    <script src="/back/assets/js/sweetalert.js"></script>

@endsection
@section('content')

    <!-- slider-section -->
  @include('front.layouts.include.slider')




    <!-- list-grid -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12 my-3">
                <h1 class="text-center small-pors most-roll color-orange">Ən çox alınan sushi, rollar və sendviçlər</h1>
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
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div id="products" class="row view-group" id="app">
            @foreach($products as $product)
                <div class="item col-xs-4 col-md-6 col-xl-4 ">
                    <div class="thumbnail ">
                        <div class="img-event card">
                            <img class="group list-group-image img-fluid" data-toggle="modal" data-target="#sebet"
                                 onclick="showProduct({{$product->id}})"
                                 src="{{asset('uploads/product/').'/'.$product->photo}}" alt=""/>
                            <div class="pruduct-pirce-button ">
                                <div class="price-cost">
                                    <p class="lead cost-sale">{{$product->price ?? ''}} Azn</p>
                                    <p class=" lead ela ml-2">{{$product->discountprice ?? ''}} Azn</p>
                                </div>
                                <div class="price-c-button">

                                    <button onclick="addCart({{$product->id}})" class=" product-sebet">
                                        <img class="sebte fa-shopping-basket" src="/front/style/my_style/img/canta.png"
                                             alt="">
                                        Əlavə et
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="caption card-body ">
                            <div>
                                <h4 class="group  inner list-group-item-heading">{{$product->name }}</h4>
                                <p class="small-pors">
                                    {!! $product->ingredient ?? '' !!}
                                </p>
                                <p class="group inner list-group-item-text">
                                    Klassik Filadelfiya, Filadelfiya lüksü, Kyoto,Xiyar ilə Filadelfiya, yaşıl soğan ilə
                                    Filadelfiya</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Bakıda suşi və rulon tədarükü -->
@include('front.layouts.include.foot-text')


@endsection
@section('foot')


    <script>


        function addCart(id) {
            var url = "/basket/add";
            var qty = document.getElementById('quantity').value

            $.ajax({
                url: url,
                data: {"_token": "{{ csrf_token() }}", id: id, qty: qty},
                type: 'POST',
                success: function (response) {
                    if (response > 0) {
                        document.getElementById('cartcount').innerHTML = response;
                        //alert(response)
                        sweetAlert()

                        // Swal.fire({
                        //     position: 'top-end',
                        //     icon: 'success',
                        //     title: 'Məhsul səbətə əlavə olundu',
                        //     showConfirmButton: false,
                        //     timer: 1500
                        // })

                    }


                }
            });

        }


        function showProduct(id) {


            var url = "/basket/show-product";
            var id = id;
            $.ajax({
                url: url,
                data: {"_token": "{{ csrf_token() }}", id: id},
                type: 'POST',
                success: function (response) {


                    document.getElementById('sebet').innerHTML = response

                    $('#sebet').modal();
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Məhsul səbətə əlavə olundu',
                        showConfirmButton: false,
                        timer: 1500
                    })


                }
            });
        }


    </script>





@endsection

