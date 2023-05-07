<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MultiImg;
class ProductController extends Controller
{
    public function AllProduct(){
        $products = Product::latest()->get();
        return view('backend.product.all_product',compact('products'));
    }

    public function AddProduct(){
        $activeVendor = User::where('status','active')->where('role','vendor')->latest()->get();
        $brands = Brand::latest()->get();
        $categories = Category::latest()->get();
        return view('backend.product.add_product',compact('brands','categories','activeVendor'));
    }
}
