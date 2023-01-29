@extends('admin.master')

@section('title')
    Manage Order
@endsection

@section('body')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                            </div>
                            <h4 class="page-title">Order Manage</h4>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="alt-pagination-preview">
                                        @if ($message = Session::get('destroy_message'))
                                            <p class="text-center text-danger">{{ $message }}</p>
                                        @elseif( $message = Session::get('store_message'))
                                            <p class="text-center text-success">{{ $message }}</p>
                                        @elseif( $message = Session::get('update_message'))
                                            <p class="text-center text-primary">{{ $message }}</p>
                                        @endif

                                        <table id="alternative-page-datatable" style="font-size:11px;width:100%" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th style="width:1%">#</th>
                                                <th style="width:10%">Order No</th>
                                                <th style="width:69%">Customer Info</th>
                                                <th style="width:10%">Order total</th>
                                                <th style="width:10%">Order Date</th>
                                                <th style="width:10%">Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td style="vertical-align: middle">{{$loop->iteration}}</td>
                                                    <td style="vertical-align: middle">{{$order->id}}</td>
                                                    <td style="vertical-align: middle">{{$order->customer->name.'('. $order->customer->mobile.')'}}</td>
                                                    <td style="vertical-align: middle">{{$order->order_total}}</td>
                                                    <td style="vertical-align: middle">{{$order->order_date}}</td>
                                                    <td style="vertical-align: middle">{{$order->order_status}}</td>
                                                    <td style="vertical-align: middle">
                                                        <a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn btn-info btn-sm" title="View Order Detail">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                        <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn btn-primary btn-sm" title="View Order Invoice">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                        <a href="{{route('admin.download-invoice', ['id' => $order->id])}}" class="btn btn-secondary btn-sm" title="Download Order Invoice">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                        <a href="{{route('admin.order-edit', ['id' => $order->id])}}" class="btn btn-success btn-sm" title="Edit Order">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="{{route('admin.order-delete', ['id' => $order->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this.');" title="Delete Order">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
            </div></div></div>
@endsection
