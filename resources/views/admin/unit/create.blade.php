@extends('admin.master')

@section('title')
    Manage Category
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
                                <h4 class="page-title">Update Category</h4>
                            @else
                                <h4 class="page-title">Create Category</h4>
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
                                        <form action="@if (request('id')>0) {{route('unit.update', ['id' => $unit->id])}} @else {{route('unit.store')}} @endif" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Unit name</label>
                                                <input type="text" name="name" @if (request('id')>0) value="{{$unit->name}}" @endif class="form-control" id="validationCustom01" required>
                                                <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <button class="btn btn-primary" type="submit">@if (request('id')>0) Update @else Add New @endif Unit</button>
                                        </form>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
            </div></div></div>
@endsection
