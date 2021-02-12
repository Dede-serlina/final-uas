@extends('dashboard.layout')
 
@section('content')

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid" id="jumbotron">
        <div class="container ml-0 mt-5 mb-5 pt-5 pb-5">
            <p class="h1 text-white font-weight-bold text-uppercase">play hard, relax harder <br>
                with a realtree spa</p>
            <button type="button" class="btn btn-outline-light">SHOP NOW</button>
        </div>
    </div>
    <!-- akhir jumbotron -->

    <!-- section menu -->
    <div class="row container mx-auto mb-3">
        <div class="col p-0 ml-3">
            <div class="card bg-light mb-3 p-1" style="max-width: 20rem;">
                <div class="card-body d-flex flex-column justify-content-center pl-0 pr-0">
                    <h5 class="card-title text-center font-weight-bold">FREE SHIPPING</h5>
                    <p class="card-text text-center">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <a href="#" class="font-weight-bold text-uppercase text-center" style="color: #eb7225;">learn
                        more</a>
                </div>
            </div>
        </div>
        <div class="col p-0 ml-3">
            <div class="card bg-light mb-3 p-1" style="max-width: 20rem;">
                <div class="card-body d-flex flex-column justify-content-center pl-0 pr-0">
                    <h5 class="card-title text-center font-weight-bold">60-DAY RETURNS</h5>
                    <p class="card-text text-center">Convenient delivery to your curbside, at no added cost. The cover
                        and steps are included too!</p>
                    <a href="#" class="font-weight-bold text-uppercase text-center" style="color: #eb7225;">learn
                        more</a>
                </div>
            </div>
        </div>
        <div class="col p-0 ml-3">
            <div class="card bg-light mb-3 p-1" style="max-width: 20rem;">
                <div class="card-body d-flex flex-column justify-content-center pl-0 pr-0">
                    <h5 class="card-title text-center font-weight-bold">5-YEARS WARRANTY</h5>
                    <p class="card-text text-center">Convenient delivery to your curbside, at no added cost. The cover
                        and steps are included too!</p>
                    <a href="#" class="font-weight-bold text-uppercase text-center" style="color: #eb7225;">learn
                        more</a>
                </div>
            </div>
        </div>
        <div class="col p-0 ml-3">
            <div class="card bg-light mb-3 p-1" style="max-width: 20rem;">
                <div class="card-body d-flex flex-column justify-content-center pl-0 pr-0">
                    <h5 class="card-title text-center font-weight-bold">PLUG-N-PLAY OPTION</h5>
                    <p class="card-text text-center">Convenient delivery to your curbside, at no added cost. The cover
                        and steps are included too!</p>
                    <a href="#" class="font-weight-bold text-uppercase text-center" style="color: #eb7225;">learn
                        more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //section menu -->

    <!-- jumbotron 2 -->
    <div class="jumbotron jumbotron-fluid bg-dark text-white pl-5">
        <div class="container col-6 d-flex flex-column justify-content-start ml-5 mt-5 mb-5 pt-5 pb-5 m-sm-0 p-sm-0 m-md-0 p-md-0">
            <p class="h3">RELAXATION IS JUST A FEW CLICKS <br> AWAY</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi placeat autem nulla quibusdam
                consequuntur delectus sequi esse ab dolor repellat maiores, numquam, magnam minima ex optio odio labore
                veniam quas.</p>
            <button type="button" class="btn btn-outline-light w-25">SHOP NOW</button>
        </div>
    </div>
    <!-- akhir jumbotron 2 -->

    <!-- container -->
    <div class="container">
        <p class="h3 font-weight-bold">OUR PRODUCT</p>
        <div class="row">
            <div class="col overflow-hidden ml-3">
                <div class="card pr-5" style="width: 25rem;">
                    <img src="{{ asset('img/jumbotron.webp') }}" class="card-img-top" alt="..." height="150">
                    <div class="card-body bg-dark">
                        <h5 class="card-title font-weight-bold mb-0" style="color: #eb7225;">Lorem Ipsum</h5>
                        <h2 class="text-white font-weight-bold">SOLD OUT</h2>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                            recusandae ullam molestiae architecto neque. Culpa, quisquam quod ea magnam quas voluptate
                            illum asperiores laboriosam aspernatur totam a quam exercitationem atque.</p>
                    </div>
                </div>
            </div>
            <div class="col p-0 overflow-hidden ml-3">
                <div class="card pr-5" style="width: 25rem;">
                    <img src="{{ asset('img/jumbotron.webp') }}" class="card-img-top" alt="..." height="150">
                    <div class="card-body bg-dark">
                        <h5 class="card-title font-weight-bold mb-0" style="color: #eb7225;">Lorem Ipsum</h5>
                        <h2 class="text-white font-weight-bold">SOLD OUT</h2>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                            recusandae ullam molestiae architecto neque. Culpa, quisquam quod ea magnam quas voluptate
                            illum asperiores laboriosam aspernatur totam a quam exercitationem atque.</p>
                    </div>
                </div>
            </div>
            <div class="col p-0 overflow-hidden ml-3">
                <div class="card pr-5" style="width: 25rem;">
                    <img src="img/jumbotron.webp" class="card-img-top" alt="..." height="150">
                    <div class="card-body bg-dark">
                        <h5 class="card-title font-weight-bold mb-0" style="color: #eb7225;">Lorem Ipsum</h5>
                        <h2 class="text-white font-weight-bold">SOLD OUT</h2>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                            recusandae ullam molestiae architecto neque. Culpa, quisquam quod ea magnam quas voluptate
                            illum asperiores laboriosam aspernatur totam a quam exercitationem atque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir container -->

    <!-- header -->
    <div class="jumbotron jumbotron-fluid bg-secondary d-flex justify-content-center mt-5 mb-5">
        <h3 class="font-weight-bold text-white mt-5 mb-5">WHY SHOP WITH US</h3>
    </div>
    <!-- header -->

    <!-- menu -->
    <div class="row container mx-auto d-sm-flex justify-content-sm-center">
        <div class="col mb-sm-3">
            <img src="img/Durable_Large_1600x.webp" alt="" width="230" class="border border-dark rounded">
        </div>
        <div class="col mb-sm-3">
            <img src="img/Energy_Efficient_1600x.webp" alt="" width="230" class="border border-dark rounded">
        </div>
        <div class="col mb-sm-3">
            <img src="img/Portable_1600x.webp" alt="" width="230" class="border border-dark rounded">
        </div>
        <div class="col">
            <img src="img/Ozone_Water_Care_1600x.webp" alt="" width="230" class="border border-dark rounded">
        </div>
    </div>
    <!-- akhir menu -->


    <!-- header -->
    <div class="jumbotron jumbotron-fluid d-flex justify-content-center mt-5 mb-5" style="background-color: #eb7225;">
        <h3 class="font-weight-bold text-white mt-5 mb-5">WHY SHOP WITH US</h3>
    </div>
    <!-- header -->

    <!-- menu 2 -->
    <div class="row container mx-auto">
        @foreach ($items as $key => $berita)
        <div class="col border m-1">
            <div class="bg-dark p-3 mt-3 mb-3">
                <h1 class="text-light">{{ $berita->title }}</h1>
                <p class="text-light">{{ $berita->deskripsion }}</p>
                <a class="btn btn-info" href="{{ route('berita.show',$berita->id) }}">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
    <!-- akhir menu 2 -->

    <p class="text-center font-italic mt-5 mb-0">Error validating access token: Session has expired on Tuesday,
        05-May-20
        11:48:31 PDT. The current time is Thursday, 19-Nov-20 20:51:57 PST.</p>

   @endsection