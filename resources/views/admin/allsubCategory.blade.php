@extends('admin.adminpanel')
@section('content')

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


        <!-- Earnings (Monthly) Card Example -->


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
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Subcategory Items</div>
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
        <h1 class="h3 mb-0 text-gray-800">Sub Category Data</h1>
    </div>

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Manage Sub Category
                </h6>
            </div>


            <div class="card-body">

                <div class="table-responsive">


                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th> Sub Category Name </th>
                                <th> Description </th>
                                <th> Image </th>
                                <th>Category Name</th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allsubCategory as $item)
                            <tr>
                                <td>
                                    {{ $item->subcategory_name }}
                                </td>

                                <td>
                                    {{ $item->subcategory_description }}
                                </td>
                                <td>
                                    <img src="{{ asset('/storage/' . $item->subcategory_image) }}" style="height:50px; width:50px;">
                                </td>
                                <td>


                                        {{ $item->ItemCategory->item_category_name }}



                                </td>
                                <td>
                                    <a href="#itemCatEditForm-{{ $loop->iteration }}" class="btn-success" data-toggle="modal" style="padding: 5px;">Edit</a>
                                </td>
                                <td>
                                    <a href="#itemCatdeleteModal-{{ $loop->iteration }}" class="btn-warning" data-toggle="modal" style="padding: 5px;">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    @foreach ($allsubCategory as $i)
    <div class="modal fade" id="itemCatEditForm-{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Category Data</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('allsubCategoryAdminUpdate', $i->isid) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Sub Category Name</label>
                            <input type="text" value="{{ $i->subcategory_name }}" class="form-control" name="catName" placeholder="Enter category name" required>
                        </div>
                        <div class="form-group">
                            <label>Category Description</label>
                            <textarea name="catDesc" class="form-control" cols="30" rows="10" placeholder="Category Description" required>{{ $i->subcategory_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Category Image</label>
                            <input type="file" accept="image/*" name="catImage" class="form-control">
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

    @foreach($allsubCategory as $subcategory)
<div class="modal fade" id="itemCatdeleteModal-{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want delete item category?</p>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-dark" data-dismiss="modal" value="Cancel">
                <a href="{{route('allsubCategoryAdmindelete', $subcategory->isid) }}" class="btn btn-secondary">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach


    <div class="container-fluid">
        <nav>
            {{-- {% if allsubCategory.has_other_pages %}
            <ul class="pagination">
                {% if allsubCategory.has_previous %}
                <a href="?page=1" class="btn btn-outline-secondary mb-4" style="border-radius: 1px; border: 1px solid #d3d3d3;">First</a>
                <li class="page-item"><a class="page-link" href="?page={{ allsubCategory.previous_page_number }}"><i class="fas fa-angle-double-left"></i></a></li>
                {% else %}
                <li class="page-item disabled"></li>
                {% endif %}

                {% if allsubCategory.number|add:'-2' > 1 %}
                <li><a class="page-link" href="?page={{ allsubCategory.number|add:'-2' }}">&hellip;</a></li>
                {% endif %}

                {% for i in allsubCategory.paginator.page_range %}

                {% if allsubCategory.number == i %}
                <li class="page-item active"><span class="page-link">{{ i }}<span class="sr-only"></span></span></li>
                {% elif i > allsubCategory.number|add:'-2' and i < allItemCategory.number|add:'2' %}
                <li class="page-item"><a class="page-link" href="?page={{ i }}">{{ i }}</a></li>
                {% endif %}
                {% endfor %}

                {% if allsubCategory.paginator.num_pages > allsubCategory.number|add:'2' %}
                <li><a class="page-link" href="?page={{ allsubCategory.number|add:'-2' }}">&hellip;</a></li>
                <li><a href="?page={{ i }}"></a></li>
                <li><a class="page-link" href="?page={{ allsubCategory.paginator.num_pages }}">{{ allsubCategory.paginator.num_pages }}</a></li>
                {% endif %}

                {% if allsubCategory.has_next %}
                <li class="page-item"><a class="page-link" href="?page={{ allsubCategory.next_page_number }}"><i class="fas fa-angle-double-right"></i></a></li>
                <a href="?page={{ allsubCategory.paginator.num_pages }}" class="btn btn-outline-secondary mb-4" style="border-radius: 1px; border: 1px solid #d3d3d3;">Last</a>
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
@endsection
