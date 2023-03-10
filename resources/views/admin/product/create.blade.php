@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            @if (request('id')>0)
                                <h4 class="page-title">Update Product</h4>
                            @else
                                <h4 class="page-title">Create Product</h4>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="custom-styles-preview">
                                        <form action="@if (request('id')>0) {{route('product.update', ['id' => $product->id])}} @else {{route('product.store')}} @endif" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                                            <div class="mb-3">
                                                <label class="form-label"  for="validationCustom01">Category</label>
                                                <select name="category_id" class="form-control select2"  required onchange="getSubCategory(this.value)">
                                                    <option>-- select a category --</option>
                                                    @foreach($categories as $category)
                                                        @if (request('id')>0)
                                                            <option value="{{$category->id}}" @if ($product->category->id==$category->id) selected @endif>{{$category->name}}</option>
                                                        @else
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Sub-category</label>
                                                <select name="sub_category_id" class="form-control select2"  required id="subCategoryId">
                                                    <option>-- select a subcategory --</option>
                                                    @foreach($subcategories as $subcategory)
                                                        @if (request('id')>0)
                                                            <option value="{{$subcategory->id}}" @if ($product->subcategory->id==$subcategory->id) selected @endif>{{$subcategory->name}}</option>
                                                        @else
                                                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Brand</label>
                                                <select name="brand_id" class="form-control select2" required>
                                                    <option>-- select a brand --</option>
                                                    @foreach($brands as $brand)
                                                        @if (request('id')>0)
                                                            <option value="{{$brand->id}}" @if ($product->brand->id==$brand->id) selected @endif>{{$brand->name}}</option>
                                                        @else
                                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Unit</label>
                                                <select name="unit_id" class="form-control select2" data-toggle="select2" id="validationCustom01" required>
                                                    <option>-- select a unit --</option>
                                                    @foreach($units as $unit)
                                                        @if (request('id')>0)
                                                            <option value="{{$unit->id}}" @if ($product->unit->id==$unit->id) selected @endif>{{$unit->name}}</option>
                                                        @else
                                                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Product name</label>
                                                <input type="text" name="name" @if (request('id')>0) value="{{$product->name}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Product Code</label>
                                                <input type="text" name="code" @if (request('id')>0) value="{{$product->code}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Stock Amount</label>
                                                <input type="number" name="stock_amount" @if (request('id')>0) value="{{$product->stock_amount}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Regular Price</label>
                                                <input type="number" name="regular_price" @if (request('id')>0) value="{{$product->regular_price}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Selling Price</label>
                                                <input type="number" name="selling_price" @if (request('id')>0) value="{{$product->selling_price}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Short Description</label>
                                                <textarea name="short_description" class="form-control" id="validationCustom02" required>@if (request('id')>0) {{$product->short_description}} @endif</textarea>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Long Description</label>
                                                <textarea name="long_description" id="simplemde1">@if (request('id')>0) {{$product->long_description}} @endif</textarea>                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            @if(request('id')>0)
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Status</label>
                                                <select class="form-control select2" name="status">
                                                    <option value="1" @if($product->status == '1') selected @endif>Active</option>
                                                    <option value="0" @if($product->status == '0') selected @endif>Inactive</option>
                                                </select>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>
                                            @endif

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustomUsername">Image</label>
                                                <div class="input-group">
                                                    <input type="file" name="image" class="form-control-file"/>
                                                    @if (request('id')>0)
                                                        <img src="{{asset($product->image)}}" alt="" height="100" width="130"/>
                                                    @endif
                                                    <div class="invalid-feedback">Please choose a username.</div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustomUsername">Other Images</label>
                                                <div class="input-group">
                                                    <input type="file" name="other_image[]" multiple class="form-control-file"/>
                                                    @if (request('id')>0)
                                                    @foreach($product->otherImages as $image)
                                                        <img src="{{asset($image->image)}}" alt="" height="100" width="130"/>
                                                    @endforeach
                                                    @endif
                                                    <div class="invalid-feedback">Please choose a username.</div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustomUsername"></label>
                                                <div class="input-group">
                                            <button class="btn btn-primary" type="submit">@if (request('id')>0) Update @else Add New @endif Product</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
            </div></div></div>
@endsection
