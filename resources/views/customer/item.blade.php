<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vividh Shop </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css1/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css1/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css1/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css1/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css1/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css1/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">
    <style>
        .product-img {
            height: 300px;
            /* Set the height of the product images */
            object-fit: cover;
            /* Ensure the images cover the entire container */
        }
    </style>
</head>

<body class="goto-here">
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+ 823832113</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">ajaypatel@gamil.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Vividh Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>


                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>

                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item cta cta-colored"><a href="{{ route('cart') }}" class="nav-link"><span
                            class="icon-shopping_cart"></span>Cart</a></li>
                <li class="nav-item cta cta-colored"><a href="{{ route('myorder') }}" class="nav-link"><span
                            class="icon-shopping_cart"></span>My Order</a></li>
                <li class="nav-item">
                    <div class="dropdown show" style="margin-top:18px">
                        <a class="av-link dropdown-toggle" style="color: black; " href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <br><br><br>



    <div class="container">
        <div class="row">
            @foreach ($item as $product)
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="{{ route('single_product', $product->iid) }}" class="img-prod">
                            <img class="img-fluid product-img"
                                src="{{ asset('/storage/' . $product->item_image) }}" alt="Product Image">
                            <span class="status">50% Off</span>
                            <div class="overlay"></div>
                        </a>
                        <!-- Add the following div to display the image name -->
                        <div class="image-name">

                        </div>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                            </div>
                            <a href="{{ route('single_product', $product->iid) }}">
                                <h3>{{ $product->item_name }}</h3>
                                <div class="pricing">
                                    <p class="price"><span
                                            class="mr-2 price-dc">{{ $product->item_price }}</span><span
                                            class="price-sale">₹ {{ $product->item_price }}</span></p>
                                </div>
                            </a>
                            <p class="bottom-area d-flex px-3">
                            </p>
                            <br>
                            <a href="{{ route('addtocart', $product->iid) }}"
                                class="add-to-cart text-center py-2 mr-1"
                                style="background-color: red; color: white; border-radius: 20px; padding: 10px 20px; text-decoration: none;"><span>Add
                                    to Cart <i class="ion-ios-add ml-1"></i></span></a><br>
                            <br>
                            <a href="{{ route('buynow', $product->iid) }}" class="active"
                                style="background-color: blue; color: white; border-radius: 20px; padding: 10px 20px; text-decoration: none;">Buy
                                Now<span><i class="ion-ios-cart ml-1"></i></span></a>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vividhshop</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Shop</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Journal</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">403, Amulya
                                        App.shantinagar,
                                        Zanzarada road, Junagadh</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">+823832113</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">ajaypatel@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('js1/jquery.min.js') }}"></script>
    <script src="{{ asset('js1/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js1/popper.min.js') }}"></script>
    <script src="{{ asset('js1/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js1/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js1/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js1/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js1/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js1/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js1/aos.js') }}"></script>
    <script src="{{ asset('js1/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js1/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js1/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js1/scrollax.min.js') }}"></script>
    <script src="{{ asset('js1/main.js') }}"></script>

</body>

</html>
