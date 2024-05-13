@extends('admin.adminpanel')
@section('content')


<a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Begin Page Content -->
<div class="container-fluid">
    <ul><?php

        ?>
        @if ($Error)
        <div class="alert alert-danger" role="alert">
            <li>{{ $Error }}</li>
          </div>
        @endif




    </ul>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                Item</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                <h4>{{$total_items}}</h4>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Registered Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_user}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Items</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_item}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sucategory</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_subcategory}}</div>

                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-gift fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Item Data</h1>
    </div>

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Add Item
                </h6>
            </div>


            <div class="card-body">
                <form action="{{ route('addItemAdminPanelData') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Item Name</label>
                        <input type="text" class="form-control" name="itemName" placeholder="Enter Item name" required>
                    </div>
                    <div class="form-group">
                        <label>Item Price</label>
                        <input type="number" class="form-control" name="itemPrice" placeholder="Enter Item Price" required>
                    </div>
                    <div class="form-group">
                        <label>Item Image</label>
                        <input type="file" accept="image/*" name="itemImage" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Select Category</label>
                        <select name="Catitem" class="form-control" required>
                            @foreach($allsubCategory as $i)
                                <option value="{{ $i->subcategory_name }}">{{ $i->subcategory_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Item Description</label>
                        <textarea name="itemDesc" class="form-control" cols="30" rows="10" placeholder="Item Description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


    <!-- /.container-fluid -->

    <!-- Footer -->

    <!-- End of Footer -->
</div>
<!-- /.container-fluid -->

@endsection
