<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\UnitController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\UserController;
Use App\Http\Controllers\website\MainController;
use App\Http\Controllers\admin\CarouselController;


Route::get('/', [MainController::class,'index'])->name('home');
Route::get('/about', [MainController::class,'about'])->name('about');
Route::get('/contact', [MainController::class,'contact'])->name('contact');
//Route::get('/login', [MainController::class,'login'])->name('login');
//Route::get('/register', [MainController::class,'register'])->name('register');
Route::get('/faq', [MainController::class, 'faq'])->name('faq');
Route::get('/category-product/{id}', [MainController::class, 'categoryProduct'])->name('category-product');
Route::get('/checkout', [MainController::class,'checkout'])->name('checkout');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');

    //carousel
    Route::get('/admin/carousel/view', [CarouselController::class,'index'])->name('carousel.view');
    Route::get('/admin/carousel/create', [CarouselController::class,'create'])->name('carousel.create');
    Route::post('/admin/carousel/store', [CarouselController::class,'store'])->name('carousel.store');
    Route::get('/admin/carousel/edit/{id}', [CarouselController::class,'edit'])->name('carousel.edit');
    Route::post('/admin/carousel/update/{id}', [CarouselController::class,'update'])->name('carousel.update');
    Route::post('/admin/carousel/destroy/{id}', [CarouselController::class,'destroy'])->name('carousel.destroy');

    //category
    Route::get('/admin/category/view', [CategoryController::class,'index'])->name('category.view');
    Route::get('/admin/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::post('/admin/category/store', [CategoryController::class,'store'])->name('category.store');
    Route::get('/admin/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/admin/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::post('/admin/category/destroy/{id}', [CategoryController::class,'destroy'])->name('category.destroy');

    //sub-category
    Route::get('/admin/sub-category/view', [SubCategoryController::class,'index'])->name('sub_category.view');
    Route::get('/admin/sub-category/create', [SubCategoryController::class,'create'])->name('sub_category.create');
    Route::post('/admin/sub-category/store', [SubCategoryController::class,'store'])->name('sub_category.store');
    Route::get('/admin/sub-category/edit/{id}', [SubCategoryController::class,'edit'])->name('sub_category.edit');
    Route::post('/admin/sub-category/update/{id}', [SubCategoryController::class,'update'])->name('sub_category.update');
    Route::post('/admin/sub-category/destroy/{id}', [SubCategoryController::class,'destroy'])->name('sub_category.destroy');

    //brand
    Route::get('/admin/brand/view', [BrandController::class,'index'])->name('brand.view');
    Route::get('/admin/brand/create', [BrandController::class,'create'])->name('brand.create');
    Route::post('/admin/brand/store', [BrandController::class,'store'])->name('brand.store');
    Route::get('/admin/brand/edit/{id}', [BrandController::class,'edit'])->name('brand.edit');
    Route::post('/admin/brand/update/{id}', [BrandController::class,'update'])->name('brand.update');
    Route::post('/admin/brand/destroy/{id}', [BrandController::class,'destroy'])->name('brand.destroy');

    //unit
    Route::get('/admin/unit/view', [UnitController::class,'index'])->name('unit.view');
    Route::get('/admin/unit/create', [UnitController::class,'create'])->name('unit.create');
    Route::post('/admin/unit/store', [UnitController::class,'store'])->name('unit.store');
    Route::get('/admin/unit/edit/{id}', [UnitController::class,'edit'])->name('unit.edit');
    Route::post('/admin/unit/update/{id}', [UnitController::class,'update'])->name('unit.update');
    Route::post('/admin/unit/destroy/{id}', [UnitController::class,'destroy'])->name('unit.destroy');

    //product
    Route::get('/admin/product/view', [ProductController::class,'index'])->name('product.view');
    Route::get('/admin/product/get-all-sub-category', [ProductController::class, 'getAllSubCategory'])->name('get-all-sub-category');

    Route::get('/admin/product/create', [ProductController::class,'create'])->name('product.create');
    Route::post('/admin/product/store', [ProductController::class,'store'])->name('product.store');
    Route::get('/admin/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
    Route::post('/admin/product/update/{id}', [ProductController::class,'update'])->name('product.update');
    Route::post('/admin/product/destroy/{id}', [ProductController::class,'destroy'])->name('product.destroy');

    //customer
    Route::get('/admin/customer/view', [CustomerController::class,'index'])->name('customer.view');
    Route::get('/admin/customer/create', [CustomerController::class,'create'])->name('customer.create');
    Route::post('/admin/customer/store', [CustomerController::class,'store'])->name('customer.store');
    Route::get('/admin/customer/edit/{id}', [CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/admin/customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');
    Route::post('/admin/customer/destroy/{id}', [CustomerController::class,'destroy'])->name('customer.destroy');

    //order
    Route::get('/admin/order/view', [CustomerController::class,'index'])->name('order.view');
    Route::get('/admin/order/create', [CustomerController::class,'create'])->name('order.create');
    Route::post('/admin/order/store', [CustomerController::class,'store'])->name('order.store');
    Route::get('/admin/order/edit/{id}', [CustomerController::class,'edit'])->name('order.edit');
    Route::post('/admin/order/update/{id}', [CustomerController::class,'update'])->name('order.update');
    Route::post('/admin/order/destroy/{id}', [CustomerController::class,'destroy'])->name('order.destroy');


    //order
    Route::get('/admin/user/view', [UserController::class,'index'])->name('user.view');
    Route::get('/admin/user/create', [UserController::class,'create'])->name('user.create');
    Route::post('/admin/user/store', [UserController::class,'store'])->name('user.store');
    Route::get('/admin/user/edit/{id}', [UserController::class,'edit'])->name('user.edit');
    Route::post('/admin/user/update/{id}', [UserController::class,'update'])->name('user.update');
    Route::post('/admin/user/destroy/{id}', [UserController::class,'destroy'])->name('user.destroy');

});
