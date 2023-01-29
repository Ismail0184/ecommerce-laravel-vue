@extends('website.master2')
@section('title')
    Product Details
@endsection



@section('body')


    <!-- Start Blog Single -->
    <section class="item-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="blog-single-main">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="xzoom-container">
                                    <img class="xzoom" id="xzoom-default" src="{{asset($product->image)}}" style="width:100%; margin-top:20px" xoriginal="{{asset($product->image)}}"/>
                                    <div class="xzoom-thumbs">
                                        @foreach($product->otherImages as $otherImage)
                                            <a href="{{asset($otherImage->image)}}"><img class="xzoom-gallery" width="80" src="{{asset($otherImage->image)}}"  xpreview="{{asset($otherImage->image)}}" title="The description goes here"></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p style="margin-top:20px; font-size: 20px">{{$product->name}}</p>
                    <p style="margin-top:10px;font-size: 12px"><strong>Brand:</strong> {{$product->brand->name}}</p>
                    <p style="margin-top:10px;font-size: 12px"><strong>Type:</strong> {{$product->subcategory->name}}</p>
                    <h1 style="margin-top:10px;color:orangered">৳ {{$product->selling_price}}</h1>
                    <p style="margin-top:10px; text-decoration: line-through"><span style="font-size:15px">৳ {{$product->regular_price}}</span></p>
                    <p style="margin-top:30px;">Quantity</p>
                    <form method="post" action="{{route('cart.add',['id'=>$product->id])}}">
                        @csrf
                    <p><input type="number" name="qty" min="1" value="1" style="text-align:center"></p>
                    <p><button type="submit" class="btn animate" style="margin-top: 10px">Add to Cart</button></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="blog-single-main">
                        <div class="row">
                            <div class="col-12">
                                <div class="blog-detail">
                                    <div class="content">
                                        <p>{{$product->short_description}}</p>
                                        <p>{{$product->long_description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
