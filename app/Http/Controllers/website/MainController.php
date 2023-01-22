<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class MainController extends Controller
{
    private $categories, $products;

    public function index()
    {
        $this->categories = Category::all();
        return view('website.home.index', ['categories' =>$this->categories,
            'products' => Product::all()
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

    public function productDetails()
    {
        return view('');
    }

    public function checkout()
    {
        return view('website.checkout.index');
    }
}
