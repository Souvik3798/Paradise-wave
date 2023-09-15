<?php

namespace App\Http\Controllers;

use App\Models\Places;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index($id){
        $place = Places::find($id);
        return view('place',['place'=>$place]);
    }
}
