<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{

    private $categories;
    public function index()
    {
        $this->categories = Category::all();
        return view('website.home.index', ['categories' => $this->categories]);
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function login()
    {
        return view('website.home.login');
    }

    public function register()
    {
        return view('website.home.register');
    }

    public function faq()
    {
        return view('website.faq');
    }

    public function categoryProduct()
    {
        return view('website.category.index');
    }
}
