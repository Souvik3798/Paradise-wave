<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index($id){
        $activity = Activities::find($id);
        return view('activity',['activity'=>$activity]);
    }
}
