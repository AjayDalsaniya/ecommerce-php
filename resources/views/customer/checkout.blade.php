<!DOCTYPE html>
<html lang="en">

<head>
    <title>Minishop - Free Bootstrap 4 Template by Colorlib</title>
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
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
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
            <a class="navbar-brand" href="index.html">Minishop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Catalog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="shop.html">Shop</a>
                            <a class="dropdown-item" href="product-single.html">Single Product</a>
                            <a class="dropdown-item" href="cart.html">Cart</a>
                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span
                                class="icon-shopping_cart"></span>[0]</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Checkout</span></p>
                    <h1 class="mb-0 bread">Checkout</h1>
                </div>
            </div>
        </div>
    </div>
<form action="{{route('orderdata')}}" method="post" enctype="multipart/form-data">
    @csrf
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 ftco-animate">
                    <form action="#" class="billing-form">
                        <h3 class="mb-4 billing-heading">Billing Details</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Firt Name</label>
                                    <input type="hidden" name="user_id" class="form-control" value="{{$iduser}}">
                                    <input type="text" name="orderfname" class="form-control" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="orderlname" class="form-control" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="w-100"></div>

                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetaddress"> Address</label>
                                    <input type="text" name="order_delivery_address" class="form-control"
                                        placeholder="House number and street name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetaddress"> City</label>
                                    <input type="text" name="city" class="form-control"
                                        placeholder="Enter Your City">
                                </div>
                            </div>



                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="ordermobile" class="form-control" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Email Address</label>
                                    <input type="text"  name="orderemail" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="w-100"></div>

                        </div>
                    </form><!-- END -->



                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6">
                            <div class="cart-detail bg-light p-3 p-md-4">
                                <table class="table table-stripeds table-bordered">
                                    <thead>
                                        <tr style="font-size: 1.5rem;">
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Total Price </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cart as $item)

                                        <input type="hidden" name="cart[{{ $loop->index }}][item_id]" value="{{ $item->item_id }}">


                                        <input type="hidden" name="cart[{{ $loop->index }}][price]"
                                                value="{{ $item->price }}">
                                        <input type="hidden" name="cart[{{ $loop->index }}][quantity]"
                                                value="{{ $item->quentity }}">
                                        <input type="hidden" name="cart[{{ $loop->index }}][totalprice]"
                                                value="{{ $item->totalprice }}">

                                        <tr style="font-size: 1.5rem;">
                                            <td>
                                                <img src="{{ asset('/storage/' . $item->item->item_image) }}" alt="myImage" height="50px" width="50px" class="mr-2">
                                                {{ $item->item->item_name }}
                                            </td>
                                            <td>{{ $item->price}}</td>
                                            <td>{{ $item->quentity }}</td>
                                            <td>{{ $item->totalprice}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div></div>

                        <div class="col-md-6 d-flex">
                            <div class="cart-detail cart-total bg-light p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>₹ {{$subtotal}}</span>
                                </p>
                                <p class="d-flex">
                                    <span>Delivery</span>
                                    <span>₹ {{$Delivery}}</span>
                                </p>

                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>₹ {{$total}} <input type="hidden" name="total_amount" value="{{$total}}"></span>
                                </p>
                                <hr>
                                <button type="submit" class="btn btn-primary py-3 px-4">Order</button>
                            </div>
                        </div>

                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->
</form>

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
                        <h2 class="ftco-heading-2">Minishop</h2>
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
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script>
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
