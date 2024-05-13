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

    <style>
        /* Custom CSS for table */
.cart-list table {
    width: 100%;
    border-collapse: collapse;
}

.cart-list table th, .cart-list table td {
    padding: 8px;
    text-align: center;
    vertical-align: middle;
    border: 1px solid #dee2e6;
}

.cart-list table thead {
    background-color: #f8f9fa;
}

.cart-list table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.cart-list table tbody tr:hover {
    background-color: #e2e2e2;
}

/* Custom CSS for status badges */
.product-status .badge {
    font-size: 12px;
    padding: 6px 12px;
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
                            <span class="text">+ 8723832113</span>
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
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>

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
                                <img src="images1\account.png" height="20px">
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

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Cart</span>
                    </p>
                    <h1 class="mb-0 bread">My Order</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">



                {{-- <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Image</th>

                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <!-- Your existing HTML structure -->
                            <tbody>
                                @if ($user)
                                @php
                                    $num=0;
                                @endphp
                                    @foreach ($order_items as $order_item)
                                            @php
                                                $num++;
                                            @endphp


                                            <tr class="text-center">
                                                <td class="product-name">
                                                    <h3> @php
                                                        echo $num;
                                                    @endphp</h3>
                                                </td>
                                                <td><img src="{{ asset('/storage/item/' . $order_item->item->item_image) }}"
                                                        height="50px"></td>
                                                <td class="product-name">
                                                    {{ $order_item->item->item_name }}
                                                </td>
                                                <td class="price">₹{{ $order_item->Item->item_price }} </td>
                                                <td class="product-name">{{ $order_item->quantity}} </td>
                                                <td class="total">₹{{ $order_item->item->item_price }} </td>
                                                <td class="">{{ $order_item->odr->order_status }} </td>
                                            </tr>
                                    @endforeach

                                @endif
                            </tbody>

                        </table>
                    </div>
                </div> --}}
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table table-bordered">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Cancel Order </th>
                                </tr>
                            </thead>
                            <!-- Your existing HTML structure -->
                            <tbody>
                                @if ($user)
                                    @php $num = 0; @endphp
                                    @foreach ($order_items as $order_item)
                                        @php $num++; @endphp

                                        <tr class="text-center">
                                            <td class="">{{ $num }}</td>
                                            <td class=""><img
                                                    src="{{ asset('/storage/' . $order_item->item->item_image) }}"
                                                    height="50px"></td>
                                            <td class="">{{ $order_item->item->item_name }}</td>
                                            <td class="product-price">₹{{ $order_item->Item->item_price }}</td>
                                            <td class="product-quantity">{{ $order_item->quantity }}</td>
                                            <td class="product-total">₹{{ $order_item->odr->total_amount }}</td>
                                            <td class="date">{{ $order_item->odr->order_date }}</td>

                                            <td class="product-status">
                                                <span
                                                    class="badge badge-primary">{{ $order_item->odr->order_status }}</span>
                                            </td>
                                            <td class="product-status">
                                                <a href="{{route('cancelorder',$order_item->odr->oid)}}"><span class="badge badge-danger">Cancel Order</span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                        <h3> No Order</h3>
                                @endif
                            </tbody>
                        </table>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js1/google-map.js') }}"></script>
    <script src="{{ asset('js1/main.js') }}"></script>

    {{-- <script>
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
                quantityInput.val(newValue);



            });

        });
    </script> --}}


    {{-- <script>
        $(document).ready(function() {
            $('.quantity-right-plus').click(function(e) {
                // Increment quantity when plus button is clicked
                var quantityInput = $(this).closest('.input-group').find('.quantity');
                var quantity = parseInt(quantityInput.val());
                quantityInput.val(quantity + 1);
                updateTotalPrice(quantityInput);
            });

            $('.quantity-left-minus').click(function(e) {
                // Decrement quantity when minus button is clicked
                var quantityInput = $(this).closest('.input-group').find('.quantity');
                var quantity = parseInt(quantityInput.val());
                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                    updateTotalPrice(quantityInput);
                }
            });

            function updateTotalPrice(quantityInput) {
                var price = parseFloat(quantityInput.closest('tr').find('.price').text().replace('₹ ', ''));
                var quantity = parseInt(quantityInput.val());
                var totalPrice = price * quantity;
                quantityInput.closest('tr').find('.total').text('₹' + totalPrice.toFixed(2));
            }
        });
    </script> --}}


    {{-- <script>
        $(document).ready(function() {
            // Function to update subtotal
            function updateSubtotal() {
                var subtotal = 0;
                $('.total').each(function() {

                    subtotal += parseFloat($(this).text().replace('₹', '').trim());
                });
                $('#subtotal').text('₹ ' + subtotal.toFixed(2));
            }

            // Quantity increment button click event
            $('.quantity-right-plus').click(function(e) {
                var quantityInput = $(this).closest('.input-group').find('.quantity');
                var quantity = parseInt(quantityInput.val());
                quantityInput.val(quantity + 1);
                updateTotalPrice(quantityInput);
                updatesubtotal(quantityInput);
                updateSubtotal(); // Update subtotal
            });

            // Quantity decrement button click event
            $('.quantity-left-minus').click(function(e) {
                var quantityInput = $(this).closest('.input-group').find('.quantity');
                var quantity = parseInt(quantityInput.val());
                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                    updateTotalPrice(quantityInput);
                    updateSubtotal(); // Update subtotal
                }
            });

            // Function to update total price
            function updateTotalPrice(quantityInput) {
                var price = parseFloat(quantityInput.closest('tr').find('.price').text().replace('₹', '').trim());
                var quantity = parseInt(quantityInput.val());
                var totalPrice = price * quantity;
                quantityInput.closest('tr').find('.total').text('₹ ' + totalPrice.toFixed(2));
            }
        });
    </script> --}}




    <script>
        $(document).ready(function() {
            // Function to update subtotal
            function updateSubtotal() {
                var subtotal = 0;
                $('.total').each(function() {
                    subtotal += parseFloat($(this).text().replace('₹', '').trim());
                });
                var deliveryCharge = 40; // Define delivery charge
                var total = subtotal + deliveryCharge; // Add delivery charge to subtotal
                $('#subtotal').text('₹ ' + subtotal.toFixed(2));
                $('#total').text('₹ ' + total.toFixed(2)); // Update total price
            }

            // Quantity increment button click event
            $('.quantity-right-plus').click(function(e) {
                var quantityInput = $(this).closest('.input-group').find('.quantity');
                var quantity = parseInt(quantityInput.val());
                quantityInput.val(quantity + 1);
                updateTotalPrice(quantityInput);
                updateSubtotal(); // Update subtotal
            });

            // Quantity decrement button click event
            $('.quantity-left-minus').click(function(e) {
                var quantityInput = $(this).closest('.input-group').find('.quantity');
                var quantity = parseInt(quantityInput.val());
                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                    updateTotalPrice(quantityInput);
                    updateSubtotal(); // Update subtotal
                }
            });

            // Function to update total price
            function updateTotalPrice(quantityInput) {
                var price = parseFloat(quantityInput.closest('tr').find('.price').text().replace('₹', '').trim());
                var quantity = parseInt(quantityInput.val());
                var totalPrice = price * quantity;
                quantityInput.closest('tr').find('.total').text('₹ ' + totalPrice.toFixed(2));
                // $('#totalprice').val('₹ ' + totalPrice.toFixed(2)); // Update total price
            }
        });
    </script>




</body>

</html>
