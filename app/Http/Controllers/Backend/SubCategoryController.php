<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function AllSubCategory(){
        $subcategories = SubCategory::latest()->get();
        return view('backend.subcategory.subcategory_all',compact('subcategories'));
    }  // end method

    public function AddSubCategory(){
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('backend.subcategory.add_subcategory',compact('categories'));
    }


}
