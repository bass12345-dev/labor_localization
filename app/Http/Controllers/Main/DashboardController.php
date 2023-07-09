<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){

        // $request->session()->forget('user_id');
        // $data = $request->session()->get('user_id');
        // echo $data;
        $data['title'] = 'Dashboard';
        return view('main.contents.dashboard.dashboard_content')->with($data);
    }
}
