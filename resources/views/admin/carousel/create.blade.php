@extends('admin.master')

@section('title')
    Manage Carousel
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
                                <h4 class="page-title">Update Carousel</h4>
                            @else
                                <h4 class="page-title">Create Carousel</h4>
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
                                        <form action="@if (request('id')>0) {{route('carousel.update', ['id' => $carousel->id])}} @else {{route('carousel.store')}} @endif" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Carousel Title</label>
                                                <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                                                <input type="text" name="title" @if (request('id')>0) value="{{$carousel->name}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Carousel Heading</label>
                                                <input type="text" name="heading" @if (request('id')>0) value="{{$carousel->name}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Carousel name</label>
                                                <input type="text" name="name" @if (request('id')>0) value="{{$carousel->name}}" @endif class="form-control" id="validationCustom01" required>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Carousel Description</label>
                                                <textarea name="description" class="form-control" id="validationCustom02" required>@if (request('id')>0) {{$carousel->description}} @endif</textarea>
                                                <div class="invalid-feedback">This field is required!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustomUsername">Carousel Image</label>
                                                <div class="input-group">
                                                    <input type="file" name="image" class="form-control-file"/>
                                                    @if (request('id')>0)
                                                        <img src="{{asset($carousel->image)}}" alt="" height="100" width="130"/>
                                                    @endif
                                                    <div class="invalid-feedback">Please choose a username.</div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">@if (request('id')>0) Update @else Add New @endif Carousel</button>
                                        </form>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
            </div></div></div>
@endsection
