@extends('website.master2')

@section('title')
    Order Confirmation
@endsection

@section('body')
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>
@endsection
