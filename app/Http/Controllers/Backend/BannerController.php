<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;

class BannerController extends Controller
{
    public function AllBanner(){
        $banners = Banner::latest()->get();
        return view('backend.banner.all_banner',compact('banners'));
    }

    public function AddBanner(){
        return view('backend.banner.add_banner');
    }

    public function StoreBanner(Request $request){

        $image = $request->file('banner_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(768,450)->save('upload/banner/'.$name_gen);

        $save_url = 'upload/banner/'.$name_gen;

        Banner::insert([
            'banner_title' => $request->banner_title,
            'banner_url' => $request->banner_url,
            'banner_image' => $save_url, 
        ]);

        $notification = array(
            'message' => 'Banner Inserted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.banner')->with($notification);
    }  // End Method


    public function EditBanner($id){
        $banners = Banner::findOrFail($id);
        return view('backend.banner.edit_banner',compact('banners'));
    }

    public function UpdateBanner(Request $request){
        $banner_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('banner_image')) {

        $image = $request->file('banner_image');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(768,450)->save('upload/banner/'.$name_gen);
        $save_url = 'upload/banner/'.$name_gen;

        if (file_exists($old_img)) {
           unlink($old_img);
        }

        Banner::findOrFail($banner_id)->update([
            'banner_title' => $request->banner_title,
            'banner_url' => $request->banner_url,
            'banner_image' => $save_url, 
        ]);

       $notification = array(
            'message' => 'Banner Updated with image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.banner')->with($notification); 

        } else {

            Banner::findOrFail($banner_id)->update([
            'banner_title' => $request->banner_title,
            'banner_url' => $request->banner_url, 
        ]);

       $notification = array(
            'message' => 'Banner Updated without image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.banner')->with($notification); 

        } // end else
        
    }



}
