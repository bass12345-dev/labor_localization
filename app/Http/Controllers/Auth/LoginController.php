<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){

        $data['title'] = 'Login';
        return view('auth.login')->with($data);
    }
}
