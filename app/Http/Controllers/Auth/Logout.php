<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logout extends Controller
{
    public function Out(Request $request){

        $request->session()->forget('user_id');  
        return redirect('/');
    }
}
