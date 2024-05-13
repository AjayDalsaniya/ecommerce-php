@extends('admin.adminpanel')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="{% url 'brewerReportOrder' %}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

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
                                    Total Items Category</div>
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

            <!-- Content Row -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"> Order Data</h1>
            </div>

            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">Manage Orders
                        </h6>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">
                            @if ($ordered_items)
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Order Date</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                            <th>User Name</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ordered_items as $i)
                                            <tr>
                                                <td>{{ $i->odr->order_date }}</td>
                                                <td>
                                                    @if ($i->item)
                                                        {{ $i->item->item_name }}
                                                    @else
                                                        Item not found
                                                    @endif
                                                </td>
                                                <td>{{ $i->price }}</td>
                                                <td>{{ $i->quantity }}</td>
                                                <td>{{ $i->totalprice }}</td>
                                                <td>{{ $i->user->first_name }} {{ $i->user->last_name }}</td>
                                                <td>{{ $i->odr->order_status }}</td>
                                                <td>
                                                    <a href="#orderEditForm-{{ $loop->index + 1 }}" class="btn btn-success"
                                                        data-toggle="modal" style="padding: 5px 10px;">Change Status</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h3>No Orders</h3>
                            @endif

                        </div>
                    </div>
                </div>

            </div>

            @foreach ($ordered_items as $i)
                <div class="modal fade" id="orderEditForm-{{ $loop->iteration }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Order Data</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('allOrderAdminUpdate', ['id' => $i->odr->oid]) }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="orderStatus1">First Name</label>
                                        <input type="text" class="form-control" name="" id=""
                                            value="{{ $i->odr->orderfname }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="orderStatus1">Last Name</label>
                                        <input type="text" class="form-control" name="" id=""
                                            value="{{ $i->odr->orderlname }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="orderStatus1">Email</label>
                                        <input type="text" class="form-control" name="" id=""
                                            value="{{ $i->odr->orderemail }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="orderStatus1">Mobile No</label>
                                        <input type="text" class="form-control" name="" id=""
                                            value="{{ $i->odr->ordermobile }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="orderStatus1">Order Date</label>
                                        <input type="text" class="form-control" name="" id=""
                                            value="{{ $i->odr->order_date }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="orderStatus1">Delivery Address</label>
                                        <textarea name="" id="" class="form-control" cols="30" rows="10" disabled>{{ $i->odr->order_delivery_address }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="orderStatus1">City</label>
                                        <input type="text" class="form-control" name="" id=""
                                            value="{{ $i->odr->city }}" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="orderStatus1">Total Amout</label>
                                        <input type="text" class="form-control" name="" id=""
                                            value="{{ $i->odr->total_amount }}" disabled>
                                    </div>



                                    <div class="form-group">
                                        <label for="orderStatus1">Order Status</label>
                                        <select name="orderStatus" class="form-control" required>
                                            <option value="pending">pending</option>
                                            <option value="out of shipping">out of shipping</option>
                                            <option value="completed">completed</option>
                                        </select>
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


            <div class="container-fluid">
                <nav>
                    {{-- {% if allOrderDetails.has_other_pages %}
                            <ul class="pagination">
                                {% if allOrderDetails.has_previous %}
                                <a href="?page=1" class="btn btn-outline-secondary mb-4" style="border-radius: 1px; border: 1px solid #d3d3d3;">First</a>
                                <li class="page-item"><a class="page-link" href="?page={{ allOrderDetails.previous_page_number }}"><i class="fas fa-angle-double-left"></i></a></li>
                                {% else %}
                                <li class="page-item disabled"></li>
                                {% endif %}

                                {% if allOrderDetails.number|add:'-2' > 1 %}
                                <li><a class="page-link" href="?page={{ allOrderDetails.number|add:'-2' }}">&hellip;</a></li>
                                {% endif %}

                                {% for i in allOrderDetails.paginator.page_range %}

                                {% if allOrderDetails.number == i %}
                                <li class="page-item active"><span class="page-link">{{ i }}<span class="sr-only"></span></span></li>
                                {% elif i > allOrderDetails.number|add:'-2' and i < allOrderDetails.number|add:'2' %}
                                <li class="page-item"><a class="page-link" href="?page={{ i }}">{{ i }}</a></li>
                                {% endif %}
                                {% endfor %}

                                {% if allOrderDetails.paginator.num_pages > allOrderDetails.number|add:'2' %}
                                <li><a class="page-link" href="?page={{ allOrderDetails.number|add:'-2' }}">&hellip;</a></li>
                                <li><a href="?page={{ i }}"></a></li>
                                <li><a class="page-link" href="?page={{ allOrderDetails.paginator.num_pages }}">{{ allOrderDetails.paginator.num_pages }}</a></li>
                                {% endif %}


                                {% if allOrderDetails.has_next %}
                                <li class="page-item"><a class="page-link" href="?page={{ allOrderDetails.next_page_number }}"><i class="fas fa-angle-double-right"></i></a></li>
                                <a href="?page={{ allOrderDetails.paginator.num_pages }}" class="btn btn-outline-secondary mb-4" style="border-radius: 1px; border: 1px solid #d3d3d3;">Last</a>
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
