<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dede Serlina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/Realtree-Spas-logo_White-Color_280x@2x.webp') }}" alt="" width="220"
                height="52"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto d-flex align-items-baseline">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop Spas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Deercamp 25-Jet Spa</a>
                        <a class="dropdown-item" href="#">Treestand 25-Jet Spa</a>
                        <a class="dropdown-item" href="#">Basecamp 45-Jet Spa</a>
                        <a class="dropdown-item" href="#">ACCESSORIES</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">BLOG</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        CONTACT US</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-user-alt"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><button type="button" class="btn text-white" style="background-color: #eb7225;"><i
                                class="fas fa-shopping-cart"></i> CART</button></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- akhir navbar-->

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
                <a class="btn btn-info" href="{{ route('show',$berita->id) }}">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
    <!-- akhir menu 2 -->

    <p class="text-center font-italic mt-5 mb-0">Error validating access token: Session has expired on Tuesday,
        05-May-20
        11:48:31 PDT. The current time is Thursday, 19-Nov-20 20:51:57 PST.</p>

    <!-- footer -->
    <div class="jumbotron jumbotron-fluid bg-dark mb-0">
        <div class="row container mx-auto">
            <div class="col">
                <ul class="navbar-nav">
                    <li class="nav-item active mb-2">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="#">
                            Customer Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">WARRANTY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">SHIPING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">CANCELLATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">RETURNS</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="navbar-nav">
                    <li class="nav-item active mb-2">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="#">
                            Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">PRIVACY POLICY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">SUPPLY CHAIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">TERMS OF USE</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="navbar-nav">
                    <li class="nav-item active mb-2">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="#">
                            CONNECT WITH US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-1" href="#"><i class="fab fa-facebook-f ml-1"></i> <i class="fab fa-youtube ml-1"></i> <i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <p class="text-white font-weight-bold">
                    Please be mindful to avoid overconsumption of alcohol during product use.                    
                    Copyright @2020. RealTree Spas. All Rights Reserved.
                    </p>
            </div>
        </div>
        <footer class="text-white text-center font-weight-bold mt-5">© 2021 Realtree Spas. Powered by Shopify</footer>
    </div>
    <!-- akhir footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>