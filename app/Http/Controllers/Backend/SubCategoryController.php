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

    public function StoreSubCategory(Request $request){
        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
        ]);

        $notification = array(
            'message' => 'SubCategory Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subcategory')->with($notification);
    }


}
