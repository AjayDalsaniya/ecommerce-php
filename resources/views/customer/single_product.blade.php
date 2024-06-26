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
                            <span class="text">+8238332112 </span>
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
            <a class="navbar-brand" href="index.html">Vividhshop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('index') }}" class="nav-link">Home</a></li>

                    <li class="nav-item"><a href="{{ 'about' }}" class="nav-link">About</a></li>


                    <li class="nav-item cta cta-colored"><a href="{{ route('cart') }}" class="nav-link"><span
                                class="icon-shopping_cart"></span>Cart</a></li>
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



    @foreach ($item as $item)
        {{-- <form action="{{route('cartdata')}}" method="POST" enctype="multipart/form-data"> --}}
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 ftco-animate">
                        <a href="{{ asset('/storage/' . $item->item_image) }}"
                            class="image-popup prod-img-bg"><img
                                src="{{ asset('/storage/' . $item->item_image) }}" height="100%" width="100%"
                                alt="Colorlib Template"></a>
                    </div>
                    <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                        <h3 style="color: royalblue">{{ $item->item_name }}</h3>
                        <div class="rating d-flex">
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2">5.0</a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                            </p>
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2" style="color: #000;">100 <span
                                        style="color: #bbb;">Rating</span></a>
                            </p>
                            <p class="text-left">
                                <a href="#" class="mr-2" style="color: #000;">500 <span
                                        style="color: #bbb;">Sold</span></a>
                            </p>
                        </div>
                        <p class="price" ><span style="color: green">₹ {{ $item->item_price }}</span></p>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group d-flex">

                                    {{-- <pre style="font-size: 22px; font-weight: 600">{{ $item->item_description }}</pre> --}}

                                    <p style="text-align: justify">{{ $item->item_description }}</p>
                                </div>
                            </div>
                            <div class="w-100"></div>


                        </div>
                        <p>
                            {{-- <input type="submit" class="btn btn-black py-3 px-5 mr-2" value="Add to Cart"> --}}
                            <a href="{{ route('addtocart', $item->iid) }}" class="btn btn-black py-3 px-5 mr-2">Add to
                                Cart</a>
                            <a href="{{ route('buynow', $item->iid) }}" class="btn btn-primary py-3 px-5">Buy now</a>
                        </p>
                    </div>
                </div>
                </form>



                <div class="row mt-5">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill"
                                href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                aria-selected="true">Description</a>


                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content bg-light" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="day-1-tab">
                                <div class="p-4">
                                    <h3 class="mb-4" style="color: royalblue">{{ $item->item_name }}</h3>
                                    <p style="text-align: justify">{{ $item->item_description }} </p>
                                    {{-- <pre style="font-size: 22px; font-weight: 600">{{ $item->item_description }}</pre> --}}
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                aria-labelledby="v-pills-day-2-tab">
                                <div class="p-4">
                                    <h3 class="mb-4">Manufactured By Nike</h3>
                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it
                                        came
                                        from it would have been rewritten a thousand times and everything that was left
                                        from
                                        its origin would be the word "and" and the Little Blind Text should turn around
                                        and
                                        return to its own, safe country. But nothing the copy said could convince her
                                        and so
                                        it didn’t take long until a few insidious Copy Writers ambushed her, made her
                                        drunk
                                        with Longe and Parole and dragged her into their agency, where they abused her
                                        for
                                        their.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                aria-labelledby="v-pills-day-3-tab">
                                <div class="row p-4">
                                    <div class="col-md-7">
                                        <h3 class="mb-4">23 Reviews</h3>
                                        <div class="review">
                                            <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a
                                                    last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a
                                                    last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                        <i class="ion-ios-star-outline"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a
                                                    last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="rating-wrap">
                                            <h3 class="mb-4">Give a Review</h3>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    (98%)
                                                </span>
                                                <span>20 Reviews</span>
                                            </p>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    (85%)
                                                </span>
                                                <span>10 Reviews</span>
                                            </p>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    (98%)
                                                </span>
                                                <span>5 Reviews</span>
                                            </p>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    (98%)
                                                </span>
                                                <span>0 Reviews</span>
                                            </p>
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                    (98%)
                                                </span>
                                                <span>0 Reviews</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
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
    <script src="{{ asset('js1/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script> <!-- Replace YOUR_API_KEY with your actual Google Maps API key -->
    <script src="{{ asset('js1/google-map.js') }}"></script>
    <script src="{{ asset('js1/main.js') }}"></script>

    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>

</html>
