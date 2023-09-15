<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $pass = $request->password;

        if($email == 'admin@2023' && $pass == '2023@admin'){
            echo 'success';
            $request->session()->put('user','admin');
            $data =  $request->session()->all();
            return $data;
        }
        else{
            echo 'failed';
        }

    }
}
