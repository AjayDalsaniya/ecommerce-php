<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- iconscout cdn link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">


    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper"> <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{% url 'adminPanel' %}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Vividh <sup>Store</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{% url 'adminPanel' %}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Options
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="{% url 'UserAdminPanel' %}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span></a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-tree-city"></i>
                    <span>Area</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Area Details:</h6>
                        <a class="collapse-item" href="{% url 'allAreaAdmin' %}">All Area</a>
                        <a class="collapse-item" href="{% url 'addAreaAdminPanel' %}">Add Area</a>
                    </div>
                </div>
            </li> --}}


            <li class="nav-item">
                <a class="nav-link" href="{{route('allorder')}}">
                    <i class="fa-solid fa-table"></i>
                    <span>Order</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoItemCat"
                    aria-expanded="true" aria-controls="collapseTwoItemCat">
                    <i class="fas fa-table"></i>
                    <span>Item Category</span>
                </a>
                <div id="collapseTwoItemCat" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Item Category Details:</h6>
                        <a class="collapse-item" href="{{route('All_Item_Category')}}">All Item Category</a>
                        <a class="collapse-item" href="{{route('Add_Item_Category')}}">Add Item Category</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoItemCats"
                    aria-expanded="true" aria-controls="collapseTwoItemCats">
                    <i class="fas fa-list"></i>
                    <span>Sub Category</span>
                </a>
                <div id="collapseTwoItemCats" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Category Details:</h6>
                        <a class="collapse-item" href="{{ route('all_sub_category')}}">All Sub  Category</a>
                        <a class="collapse-item" href="{{ route('addsubCatAdminPanel')}}">Add Sub Category</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoItem"
                    aria-expanded="true" aria-controls="collapseTwoItem">
                    <i class="fas fa-bars"></i>
                    <span>Item</span>
                </a>
                <div id="collapseTwoItem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Item Details:</h6>
                        <a class="collapse-item" href="{{ route('allItemAdmin') }}">All Item</a>
                        <a class="collapse-item" href="{{  route('addItemAdminPanel') }}">Add Item</a>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoOffer"
                    aria-expanded="true" aria-controls="collapseTwoOffer">
                    <i class="fa-solid fa-gift"></i>
                    <span>Offer</span>
                </a>
                <div id="collapseTwoOffer" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Offer Details:</h6>
                        <a class="collapse-item" href="{% url 'allOfferAdmin' %}">All Offer</a>
                        <a class="collapse-item" href="{% url 'addOfferAdminPanel' %}">Add Offer</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoTableReservation"
                    aria-expanded="true" aria-controls="collapseTwoTableReservation">
                    <i class="fa-solid fa-table"></i>
                    <span>Table Reservation</span>
                </a>
                <div id="collapseTwoTableReservation" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Basic Details:</h6>
                        <a class="collapse-item" href="{% url 'allTableReservationAdmin' %}">Table Reservation</a>
                        <a class="collapse-item" href="{% url 'allCancelTableReservationAdmin' %}">Cancel Reservation</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{% url 'tableDetailsAdminPanel' %}">
                    <i class="fa-solid fa-table"></i>
                    <span>Table Details</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoSupplier"
                    aria-expanded="true" aria-controls="collapseTwoSupplier">
                    <i class="fa-solid fa-user"></i>
                    <span>Supplier</span>
                </a>
                <div id="collapseTwoSupplier" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Basic Details:</h6>
                        <a class="collapse-item" href="{% url 'allSupplierAdmin' %}">All Supplier</a>
                        <a class="collapse-item" href="{% url 'addSupplierAdmin' %}">Add Supplier</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoPurRawMaterial"
                    aria-expanded="true" aria-controls="collapseTwoPurRawMaterial">
                    <i class="fa-solid fa-credit-card"></i>
                    <span>Purchase Raw Material</span>
                </a>
                <div id="collapseTwoPurRawMaterial" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Basic Details:</h6>
                        <a class="collapse-item" href="{% url 'allPurchaseRawMaterialAdmin' %}">Purchase Raw Record</a>
                        <a class="collapse-item" href="{% url 'addPurchaseRawMaterialAdminData' %}">Add Purchase Raw</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{% url 'allRawMaterialAdmin' %}">
                    <i class="fa-solid fa-credit-card"></i>
                    <span>Raw Material</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{% url 'allPurchaseAdmin' %}">
                    <i class="fa-solid fa-credit-card"></i>
                    <span>Purchase</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{% url 'allPurchaseRawMaterialReturn' %}">
                    <i class="fa-solid fa-credit-card"></i>
                    <span>Purchase Return Raw</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{% url 'allPurchaseReturnAdmin' %}">
                    <i class="fa-solid fa-credit-card"></i>
                    <span>Purchase Return</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoNotifications"
                    aria-expanded="true" aria-controls="collapseTwoNotifications">
                    <i class="fa-solid fa-bell"></i>
                    <span>Notifications</span>
                </a>
                <div id="collapseTwoNotifications" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Basic Details:</h6>
                        <a class="collapse-item" href="{% url 'notificationAdmin' %}">All Notifications</a>
                        <a class="collapse-item" href="{% url 'addNotificationAdminPanel' %}">Add Notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-money-bill"></i>
                    <span>Refund</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    Vividh
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        <b>Vividh</b>
                                    {{-- <b>{{currentAdmin.user_name}}</b> --}}

                                </span>
                                {{-- {% if currentAdmin.user_image %}
                                <img src="{{currentAdmin.user_image.url}}" class="img-profile rounded-circle" alt=""
                                    style="height: 45px; width: 45px;">
                                {% else %}
                                <img src="{% static '/images/default-avatar.png' %}" class="img-profile rounded-circle"
                                    alt="" style="height: 45px; width: 45px;">
                                {% endif %} --}}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="{% url 'adminProfile' %}"> --}}
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                {{-- <a class="dropdown-item" href="{% url 'home' %}"> --}}
                                    <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Home
                                </a>
                                {{-- <a class="dropdown-item" href="{% url 'AdminAdd' %}"> --}}
                                    <i class="fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Add Admin
                                </a>

                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="{% url 'Adminlogout' %}"> --}}
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('content')
                <!-- Scroll to Top Button-->

            </div>
            <!-- End of Main Content -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="font-size: 20px;">Copyright © Vividh Shop 2023</span>
                    </div>
                </div>
            </footer>
        </div>

        <!-- End of Content Wrapper -->
    </div>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('js/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ asset('js/alertify.min.js') }}"></script>

<script>
// {% for msg in messages %}
//
// {% endfor %}
</script>
</body>

</html>
