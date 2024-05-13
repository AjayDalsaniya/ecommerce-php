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
    <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Register</h2>
                <ul>
                    @if ($Error)
                    <div class="alert alert-danger" role="alert">

                        <li>{{ $Error }}</li>
                      </div>
                    @endif

                </ul>
                <form action="{{ route('registerData') }}" method="post" enctype="multipart/form-data">
                     @csrf

                    <div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name " class="form-control" name="first_name" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name " class="form-control" name="last_name" required>
							</div>
						</div>



					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="mobile" required>
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" placeholder="Enter Email Address Here.." class="form-control" name="email" required>
					</div>
                    <div class="form-group">
						<label>Password</label>
						<input type="password" placeholder="Enter password Here.." class="form-control" name="password" required>
					</div>


                  <div class="d-flex justify-content-center">
                    <button type="submit"
                      data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route('login')}}"
                      class="fw-bold text-body"><u>Login here</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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


    </body>
  </html>
