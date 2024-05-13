@extends('admin.adminpanel')
@section('content')

<a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Begin Page Content -->
<div class="container-fluid">

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
        <h1 class="h3 mb-0 text-gray-800">Item Data</h1>
    </div>

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Manage Item
                </h6>
            </div>


            <div class="card-body">

                <div class="table-responsive">


                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> Item Name </th>
                                <th> Image </th>
                                <th> Price </th>
                                <th> Category </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allItem as $item)
                            <tr>
                                <td>
                                    {{ $item->item_name }}
                                </td>

                                <td>
                                    <img src="{{ asset('/storage/'.$item->item_image) }}" style="height:50px; width:50px;">
                                </td>

                                <td>
                                    {{ $item->item_price }}
                                </td>

                                <td>
                                    {{ optional($item->Subcategory)->subcategory_name }}
                                </td>

                                <td>
                                    <a href="#itemEditForm-{{ $loop->iteration }}" class="btn btn-success" data-toggle="modal" style="padding: 5px;">Edit</a>
                                </td>

                                <td>
                                    <a href="#itemDeleteModal-{{ $loop->iteration }}" class="btn-warning" data-toggle="modal" style="padding: 5px;">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    @foreach($allItem as $item)
    <div class="modal fade" id="itemEditForm-{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Item Data</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('allItemAdminUpdate', $item->iid) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" value="{{ $item->item_name }}" class="form-control" name="itemName" placeholder="Enter Item name" required>
                        </div>
                        <div class="form-group">
                            <label>Item Price</label>
                            <input type="number" value="{{ $item->item_price }}" class="form-control" name="itemPrice" placeholder="Enter Item Price" onkeypress="if(this.value.length == 4) return false;" required>
                        </div>
                        <div class="form-group">
                            <label>Item Image</label>
                            <input type="file" accept="image/*" name="itemImage" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Select Category</label>
                            <select name="Catitem" class="form-control">
                                @foreach($allSubCategory as $category)
                                <option value="{{ $category->subcategory_name }}">{{ $category->subcategory_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Item Description</label>
                            <textarea name="itemDesc" class="form-control" cols="30" rows="10" placeholder="Item Description" required>{{ $item->item_description }}</textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="Save" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach


    @foreach($allItem as $item)
<div class="modal fade" id="itemDeleteModal-{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want delete item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                <a href="{{ route('allItemAdmindelete',$item->iid )}}" class="btn btn-secondary">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach

    <div class="container-fluid">
        <nav>
            {{-- {% if allItem.has_other_pages %}
            <ul class="pagination">
                {% if allItem.has_previous %}
                <a href="?page=1" class="btn btn-outline-secondary mb-4" style="border-radius: 1px; border: 1px solid #d3d3d3;">First</a>
                <li class="page-item"><a class="page-link" href="?page={{ allItem.previous_page_number }}"><i class="fas fa-angle-double-left"></i></a></li>
                {% else %}
                <li class="page-item disabled"></li>
                {% endif %}

                {% if allItem.number|add:'-2' > 1 %}
                <li><a class="page-link" href="?page={{ allItem.number|add:'-2' }}">&hellip;</a></li>
                {% endif %}

                {% for i in allItem.paginator.page_range %}

                {% if allItem.number == i %}
                <li class="page-item active"><span class="page-link">{{ i }}<span class="sr-only"></span></span></li>
                {% elif i > allItem.number|add:'-2' and i < allItem.number|add:'2' %}
                <li class="page-item"><a class="page-link" href="?page={{ i }}">{{ i }}</a></li>
                {% endif %}
                {% endfor %}

                {% if allItem.paginator.num_pages > allItem.number|add:'2' %}
                <li><a class="page-link" href="?page={{ allItem.number|add:'-2' }}">&hellip;</a></li>
                <li><a href="?page={{ i }}"></a></li>
                <li><a class="page-link" href="?page={{ allItem.paginator.num_pages }}">{{ allItem.paginator.num_pages }}</a></li>
                {% endif %}

                {% if allItem.has_next %}
                <li class="page-item"><a class="page-link" href="?page={{ allItem.next_page_number }}"><i class="fas fa-angle-double-right"></i></a></li>
                <a href="?page={{ allItem.paginator.num_pages }}" class="btn btn-outline-secondary mb-4" style="border-radius: 1px; border: 1px solid #d3d3d3;">Last</a>
                {% else %}
                <li class="page-item disabled"></li>
                {% endif %}
            </ul>
            {% endif %} --}}
        </nav>
    </div>
    <!-- /.container-fluid -->


    <!-- /.container-fluid -->

    <!-- Footer -->

    <!-- End of Footer -->
</div>
<!-- /.container-fluid -->




@endsection

