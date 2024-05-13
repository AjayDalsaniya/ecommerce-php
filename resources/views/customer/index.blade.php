<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vividh Shop</title>
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

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <style>
        .product-img {
            height: 300px;
            /* Set the height of the product images */
            object-fit: cover;
            /* Ensure the images cover the entire container */


        }
    </style>
    <style>
        #home-section {
            height: 400px; /* Adjust the height as needed */
        }
        .input-group {
    width: 300px; /* Adjust the width as needed */
    margin-top: 15px;
    border-radius: 10%;
}

.input-group-append {
    margin-left: -1px;
}

.btn-primary {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
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
                            <span class="text">+ 8238332113</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">ajaypatel@gmail.com</span>
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
            <a class="navbar-brand" href="index.html" style="color:aliceblue">Vividh Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <form action="{{ url('searchproduct') }}" method="POST" class="form-inline">
                            @csrf
                            <div class="input-group">
                                <input type="search" id="search_product" name="product_name" class="form-control" placeholder="Search Product Name" aria-label="Search" aria-describedby="basic-addon1" style="border-bottom-left-radius: 30%;border-top-left: 30%">
                                <div class="input-group-append">
                                    <button type="submit" class="ftco">Search</button>
                                </div>
                            </div>
                        </form>

                    </li>

                    <li class="nav-item" ><a href="{{ route('about') }}" class="nav-link" style="font-size: 15px">About</a></li>

                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link"style="font-size: 15px">Contact</a></li>

                    <li class="nav-item">
                        <a href="{{ route('cart') }}" class="nav-link" style="font-size: 15px"><span class="icon-shopping_cart"style="font-size: 15px"></span>Cart</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('myorder') }}" class="nav-link" style="font-size: 15px"><span class="icon-shopping_cart"style="font-size: 15px; font-weight:bold"></span>My Order</a>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown show" style="margin-top:18px">
                            <a class="av-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images1\login.png" height="20px">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @if ($uid)
                                <a class="dropdown-item" href="">{{ $uid->first_name }} {{ $uid->last_name }}</a>
                                @endif
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


    <section id="home-section" class="hero">
        {{-- <div class="home-slider owl-carousel" style="background-color: rgb(83, 83, 203);"> --}}
            <div class="home-slider owl-carousel" >
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0" >
                    <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img-fluid" style="padding-top:35px;padding-bottom: 100%">
                            <img src="images/bg_1.png" alt="" height="400px" width="auto">
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '100%' }">
                            <div class="text">
                                <span class="subheading" style="color: white;margin-bottom: 0%">#New Arrival</span>
                                <div class="horizontal">
                                    <h2
                                        class="mb-4 mt-3"style="color: yellow; font-family: Lucida Handwriting, cursive;">
                                        Shoes Collection 2019</h2>
                                    <p class="mb-4" style="color: white;padding-bottom: 50%">Discover the latest trends in footwear with
                                        our <br>stunning 2019 collection.<br> Elevate your style and step into the new
                                        season in style.</p>
                                    <a href="#" class="btn-custom">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second slide -->
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img-fluid"style="padding-top:35px;padding-bottom: 100%">
                            <img src="images/bg_2.png" alt="" height="370px"width="100px">
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading" style="color: white">#New Arrival</span>
                                <div class="horizontal">
                                    <h1
                                        class="mb-4 mt-3"style="color: yellow; font-family: Lucida Handwriting, cursive;">
                                        New Shoes Winter Collection</h1>
                                    <p class="mb-4" style="color: white;padding-bottom: 50%">Embrace the winter season with our latest
                                        collection of stylish and comfortable shoes. Stay warm and fashionable wherever
                                        you go.</p>
                                    <a href="#" class="btn-custom">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4" style="color: royalblue;font-family: Lucida Handwriting, cursive;">New Category
                        Arrival</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($itemcategory as $itemcategory)
                        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                            <div class="product d-flex flex-column">
                                {{-- <a href="{{ route('subcategory', $product->isid) }}" class="img-prod"> --}}
                                <img class="img-fluid product-img"
                                    src="{{ asset('/storage/' . $itemcategory->item_category_image) }}"
                                    alt="Product Image">
                                <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <h3><a href="#">
                                            <center>{{ $itemcategory->item_category_name }}</center>
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Product Names -->

            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="image-names">
                        {{-- @foreach ($itemcategory as $itemcategory)
                        <span class="image-name">{{$itemcategory->item_category_name}}</span>
                        @endforeach --}}
                    </div>
                </div>
            </div>
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4" style="color: red ;font-family: Lucida Handwriting, cursive;">Best Of Mobile </h2>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($mobile as $product)
                        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                            <div class="product d-flex flex-column">
                                <a href="{{ route('subcategory', $product->isid) }}" class="img-prod">
                                    <img class="img-fluid product-img"
                                        src="{{ asset('/storage/' . $product->subcategory_image) }}"
                                        alt="Product Image">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <h3><a href="#">
                                            <center>{{ $product->subcategory_name }}</center>
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Product Names -->

            </div>

            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4" style="color: red ;font-family: Lucida Handwriting, cursive;">Best Of TV </h2>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($tv as $product)
                        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                            <div class="product d-flex flex-column">
                                <a href="{{ route('subcategory', $product->isid) }}" class="img-prod">
                                    <img class="img-fluid product-img"
                                        src="{{ asset('/storage/' . $product->subcategory_image) }}"
                                        alt="Product Image">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <h3><a href="#">
                                            <center>{{ $product->subcategory_name }}</center>
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Product Names -->

            </div>

            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4" style="color: red ;font-family: Lucida Handwriting, cursive;">Best Of Mensware </h2>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($mensware as $product)
                        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                            <div class="product d-flex flex-column">
                                <a href="{{ route('subcategory', $product->isid) }}" class="img-prod">
                                    <img class="img-fluid product-img"
                                        src="{{ asset('/storage/' . $product->subcategory_image) }}"
                                        alt="Product Image">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <h3><a href="#">
                                            <center>{{ $product->subcategory_name }}</center>
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Product Names -->

            </div>

            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4" style="color: red ;font-family: Lucida Handwriting, cursive;">Best Of Womensware </h2>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($women as $product)
                        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                            <div class="product d-flex flex-column">
                                <a href="{{ route('subcategory', $product->isid) }}" class="img-prod">
                                    <img class="img-fluid product-img"
                                        src="{{ asset('/storage/' . $product->subcategory_image) }}"
                                        alt="Product Image">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <h3><a href="#">
                                            <center>{{ $product->subcategory_name }}</center>
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Product Names -->

            </div>


    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-bag"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Free Shipping</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Support Customer</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-payment-security"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Secure Payments</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
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

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

  <script>

      var availableTags = [];
      $.ajax({
        method:"GET",
        url:"/product-list",
        success: function(response){
        //    console.log(response);
           startAutoComplete(response)
        }
      })
      function startAutoComplete(availableTags)
      {
        $( "#search_product   " ).autocomplete({
        source: availableTags
      });
      }


    </script>





</body>

</html>
