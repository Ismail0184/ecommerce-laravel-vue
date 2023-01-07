@extends('admin.master')

@section('title')
    Manage Sub-Category
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
                                <h4 class="page-title">Update Sub-Category</h4>
                            @else
                                <h4 class="page-title">Create Sub-Category</h4>
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
                                        <form action="@if (request('id')>0) {{route('sub_category.update', ['id' => $category->id])}} @else {{route('sub_category.store')}} @endif" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Category name</label>
                                                <select name="category_id" class="form-control select2" data-toggle="select2" id="validationCustom01" required>
                                                    <option value="">-- Choose Category --</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Category name</label>
                                                <input type="text" name="name" @if (request('id')>0) value="{{$category->name}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Category Description</label>
                                                <textarea name="description" class="form-control" id="validationCustom02" required>@if (request('id')>0) {{$category->description}} @endif</textarea>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustomUsername">Image</label>
                                                <div class="input-group">
                                                    <input type="file" name="image" class="form-control-file"/>
                                                    @if (request('id')>0)
                                                        <img src="{{asset($category->image)}}" alt="" height="100" width="130"/>
                                                    @endif
                                                    <div class="invalid-feedback">Please choose a username.</div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Add New Category</button>
                                        </form>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
            </div></div></div>
@endsection
