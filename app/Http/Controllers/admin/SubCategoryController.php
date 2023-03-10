<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $subCategories, $categories, $subCategory;

    public function index()
    {
        $this->subCategories = SubCategory::all();
        return view('admin.subcategory.index', ['subCategories' => $this->subCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->categories = Category::all();
        return view('admin/subcategory/create', ['categories' => $this->categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubCategory::newSubCategory($request);
        return redirect('admin/sub-category/view')->with('store_message','The sub-category has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->subCategory = SubCategory::find($id);
        $this->categories = Category::all();
        return view('admin.subcategory.create', ['subcategory' => $this->subCategory], ['categories' => $this->categories]);
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
        SubCategory::updateSubCategory($request, $id);
        return redirect('/admin/sub-category/view')->with('update_message','The sub-category has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('admin/sub-category/view')->with('destroy_message', 'The sub-category has been successfully deleted.');
    }
}
