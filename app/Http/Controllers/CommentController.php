<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request){
        $comment = new Posts;

        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->packages_id = $request->packages_id;

        $comment->save();

        if($comment){
            return redirect()->back()->with('success','Your Review Noted Successfully');
        }else{
            return redirect()->back()->with('error','Your Review Cannot able to Note');
        }
    }
}
