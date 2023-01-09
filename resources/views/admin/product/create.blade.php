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
                                        <form action="@if (request('id')>0) {{route('product.update', ['id' => $subcategory->id])}} @else {{route('product.store')}} @endif" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Category</label>
                                                <select name="category_id" class="form-control select2" data-toggle="select2" id="validationCustom01" required>
                                                    <option></option>
                                                    @foreach($categories as $category)
                                                        @if (request('id')>0)
                                                            <option value="{{$category->id}}" @if ($subcategory->category->id==$category->id) selected @endif>{{$category->name}}</option>
                                                        @else
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Category name</label>
                                                <input type="text" name="name" @if (request('id')>0) value="{{$subcategory->name}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Category Description</label>
                                                <textarea name="description" class="form-control" id="validationCustom02" required>@if (request('id')>0) {{$subcategory->description}} @endif</textarea>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustomUsername">Image</label>
                                                <div class="input-group">
                                                    <input type="file" name="image" class="form-control-file"/>
                                                    @if (request('id')>0)
                                                        <img src="{{asset($subcategory->image)}}" alt="" height="100" width="130"/>
                                                    @endif
                                                    <div class="invalid-feedback">Please choose a username.</div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">@if (request('id')>0) Update @else Add New @endif Sub-category</button>
                                        </form>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
            </div></div></div>
@endsection
