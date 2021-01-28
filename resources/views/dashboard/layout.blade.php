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
        <div class="container">
            @yield('content')
        </div>
    <!-- footer -->
    <div class="jumbotron jumbotron-fluid bg-dark mt-3 mb-0">
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
</html>