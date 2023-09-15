<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(Request $request) {
        if($request->pack){
            $packages = Packages::where('name','Like','%'.$request->pack.'%');
            return view('package',['packages'=>$packages]);
        }
        $packages = Packages::all();
        return view('package',['packages'=>$packages]);
    }

    public function search(Request $request){
        $packages = Packages::where('type',$request->search)->get();
        return view('package',['packages'=>$packages]);
    }

    public function package($id){
        $packages = Packages::find($id);
        return view('package_details',['packages'=>$packages]);
    }
}
