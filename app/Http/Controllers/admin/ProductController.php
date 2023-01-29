<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $products, $categories, $subcategories, $brands, $units, $product;

    public function getAllSubCategory()
    {
        return response()->json(SubCategory::where('category_id', $_GET['id'])->get());
    }

    public function index()
    {
        $this->products = Product::all();
        return view('admin.product.index',['products'=>$this->products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create',[
            'categories'        => Category::where('status', 1)->get(),
            'subcategories'    => SubCategory::where('status', 1)->get(),
            'brands'            => brand::where('status', 1)->get(),
            'units'             => Unit::where('status', 1)->get(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        OtherImage::newOtherImage($request, $this->product->id);
        return redirect('/admin/product/view')->with('store_message','The product has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.show', ['product'=>$this->product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.product.create',[
            'categories'        => Category::where('status', 1)->get(),
            'subcategories'    => SubCategory::where('status', 1)->get(),
            'brands'            => brand::where('status', 1)->get(),
            'units'             => Unit::where('status', 1)->get(),
            'product'           => Product::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('admin/product/view')->with('update_message','This product has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::deleteProduct($id);
        return redirect('admin/product/view')->with('destroy','This product has been deleted');
    }
}
