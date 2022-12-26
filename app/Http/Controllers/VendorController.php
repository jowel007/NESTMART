<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function VendorDashboard(){
        return view('vendor.index');
    }

    public function VendorLogin(){
        return view('vendor.vendor_login');
    }

    public function VendorProfile(){
        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('vendor.vendor_profile_view',compact('vendorData'));
    }

    public function VendorDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/vendor/login');
    }
}
