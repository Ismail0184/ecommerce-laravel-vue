@extends('admin.master')
@section('title')
    Product View Page
@endsection

@section('body')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                                <h4 class="page-title">Product Details</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <table class="table table-bordered table-hover" style="font-size:11px">
                                        <tr>
                                            <th style="width: 10%">Product ID</th>
                                            <td>{{$product->id}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Product Code</th>
                                            <td>{{$product->code}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Product Name</th>
                                            <td>{{$product->name}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Category</th>
                                            <td>{{$product->category->name}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Sub-Category</th>
                                            <td>{{$product->subcategory->name}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Brand</th>
                                            <td>{{$product->brand->name}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Unit</th>
                                            <td>{{$product->unit->name}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Short Description</th>
                                            <td>{{$product->short_description}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Short Description</th>
                                            <td>{{$product->long_description}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Regular Price</th>
                                            <td>{{$product->regular_price}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Selling Price</th>
                                            <td>{{$product->selling_price}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 10%">Stock Price</th>
                                            <td>{{$product->stock_amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Total View</th>
                                            <td>{{$product->hit_count}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Total Sale</th>
                                            <td>{{$product->sales_count}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Feature Image</th>
                                            <td><img src="{{asset($product->image)}}" alt="" height="100" width="130"/></td>
                                        </tr>
                                        <tr>
                                            <th>Product Other Image</th>
                                            <td>
                                                @foreach($product->otherImages as $otherImage)
                                                    <img src="{{asset($otherImage->image)}}" alt="" height="100" width="130"/>
                                                @endforeach
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Product Status</th>
                                            <td>
                                                @if($product->status==1) <h6 class="status-success" style="color:green">Active</h6> @else <h6 class="status-success" style="color:red">Inactive</h6> @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
            </div></div></div>
@endsection
