<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class MainController extends Controller
{
    private $categories, $products, $product;

    public function index()
    {
        $this->categories = Category::all();
        return view('website.home.index', ['categories' =>$this->categories,
            'subCategory' => SubCategory::all(),
            'products' => Product::where('status', 1)->orderBy('id', 'desc')->take(12)->get(),
            'hotitems' => Product::where('status', 1)->orderBy('id', 'asc')->take(8)->get()
            ]);
    }

    public function about()
    {

    }

    public function contact()
    {
        return view('website.contact');
    }

    public function categoryProduct($id)
    {
        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        $this->categories = Category::all();
        return view('website.category.index', ['products' => $this->products, 'categories'=>$this->categories]);
    }

    public function subcategoryProduct($id)
    {
        $this->products = Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get();
        $this->categories = Category::all();
        return view('website.subcategory.index', ['products' => $this->products, 'categories'=>$this->categories]);
    }

    public function productDetails($id)
    {
        $this->product = Product::find($id);
        return view('website.product.index', ['product' => $this->product]);
    }

    public function checkout()
    {
        return view('website.checkout.index');
    }
}
