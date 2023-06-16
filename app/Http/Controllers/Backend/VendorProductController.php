<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MultiImg;
use Carbon\Carbon;
use Image;
use Auth;

class VendorProductController extends Controller
{
    public function VendorAllProduct(){
        $id = Auth::user()->id;
        $products = Product::where('vendor_id',$id)->latest()->get();
        return view('vendor.backend.product.vendor_product_all',compact('products'));
    }

    public function VendorAddProduct(){
        $brands = Brand::latest()->get();
        $categories = Category::latest()->get();
        return view('vendor.backend.product.vendor_add_product',compact('brands','categories'));
    }

    public function VendorGetSubCategory($category_id){
        $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);
    } // End Method
}