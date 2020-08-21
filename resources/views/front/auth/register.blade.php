@extends('front.layouts.master')
@section('title','register')
@section('content')
    @include('front.layouts.include.slider')



    <!-- qeydiyyat -->
    <div class="container-fluid">
        @include('back.layouts.include.alert-messages')

        <form action="{{route('registerP')}}"
              method="Post"
              enctype="multipart/form-data">
            @csrf
            <div class="row mt-4 mb-4">
                <div class="col-12 col-sm-12 col-md-8 offset-md-2 offset-lg-2 offset-xl-2 col-xl-8 col-lg-8 ">
                    <div class="parol-yenile-page">
                        <h3 class="parol-title text-center">
                            Qeydiyyat
                        </h3>
                    </div>


                    <div class="row">

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6col-xl-6">
                            <h4 class="parol-title text-center">Əsas məlumat</h4>
                            <div class="form-group">
                                <label for="">Ad*</label>
                                <input type="name" class="form-control" name="name" value="{{old('name')}}" id=""
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Elektron poçt*</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                       value="{{old('email')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefon*</label>
                                <input type="number" class="form-control" name="phone" id="exampleInputEmail1"
                                       {{old('phone')}} required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Şifrə*</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Şifrə təsdiqlənməsi*</label>
                                <input type="password" class="form-control" id="exampleInputEmail1"
                                       name="password_confirmation" required>
                            </div>

                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h4 class="parol-title text-center">Çatdırılma ünvanı</h4>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ünvan*</label>
                                <input type="text" class="form-control" id="" name="location">

                            </div>
                            <div class="cps text-right">
                                <img class="ml-2 mr-2 icon-img" src="./style/my_style/img/location.png" alt="">
                                <a class="text-black" href="">GPS aşkar edin</a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Küçə/ Ev *</label>
                                <input type="text" class="form-control" id="" name="street"
                                       value="{{old('street')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mənzil / Ofis</label>
                                <input type="email" class="form-control" id=""
                                       value="{{old('home')}}" name="home">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Əlavə məlumat</label>
                                <input type="text" class="form-control" id=""
                                       value="{{old('content')}}" name="content">
                            </div>
                        </div>

                    </div>

                    <div class="text-center">
                        <button class="btn login-button ">Qeydiyyat</button>
                    </div>

                </div>
            </div>
        </form>

    </div>


@endsection
