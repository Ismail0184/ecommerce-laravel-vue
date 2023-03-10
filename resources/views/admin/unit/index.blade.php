@extends('admin.master')

@section('title')
    Manage Unit
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
                                <a href="{{route('unit.create')}}" type="button" class="btn btn-primary">Add New</a>
                            </div>
                            <h4 class="page-title">Category Manage</h4>
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
                                                <th style="width:">Unit Name</th>
                                                <th style="width:10%">Option</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($units as $unit)
                                                <tr>
                                                    <td style="vertical-align:middle">{{$loop->iteration}}</td>
                                                    <td style="vertical-align:middle">{{$unit->name}}</td>
                                                    <td style="vertical-align:middle">
                                                        <form action="{{route('unit.destroy', ['id' => $unit->id])}}" method="post">
                                                            @csrf
                                                            <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success btn-sm" onclick="return confirm('Are you sure want to edit?');">
                                                                <i class=" ri-pencil-line"></i>
                                                            </a>
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this.');">
                                                                <i class="ri-delete-bin-fill"></i>
                                                            </button>
                                                        </form>
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
