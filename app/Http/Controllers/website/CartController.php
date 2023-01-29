<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product;

    public function add(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add(array([
            'id'            => $this->product->id,
            'name'          => $this->product->name,
            'price'         => $this->product->selling_price,
            'quantity'      => $request->qty,
            'attributes'    => [
                'image'     => $this->product->image,
                'category'  => $this->product->category->name,
                'brand'     => $this->product->brand->name,
            ],
            ]
        ));

        return redirect('/cart/show');

    }

    public function show()
    {
        return view('website.cart.index', ['products' => Cart::getContent()]);
    }

    public function remove(Request $request, $id)
    {
        Cart::remove($id);
        return redirect('/cart/show');
    }

    public function update(Request $request, $id)
    {
        Cart::update($id);
        return redirect('/cart/show');
    }
}
