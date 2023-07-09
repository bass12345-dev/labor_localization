<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    public function index(){

        $data['title'] = 'Login';
        return view('auth.login')->with($data);
    }

    public function verify(Request $request){
    
        $username = $request->input('username');
        $password = $request->input('password');

        $count = User::where('username', '=', $username)->count();

        $user = User::where('username', '=', $username)->first();

        

        if($password == $user->password){
                
                    // $data['response'] = true;
                    // $data['c'] = 'alert-primary';
                    // $data['message'] = 'Success';
                    echo 'succes';
    
                }else {
                    echo 'error';
                    // $data['response'] = false; 
                    // $data['c'] = 'alert-danger';
                    // $data['message'] = 'Invalid Password'; 
                }

        // if($count > 0){
           
        //     $user = User::where('username', '=', $username)->get()[0];

        //     if($password == $user['password']){
                
        //         $data['response'] = true;
        //         $data['c'] = 'alert-primary';
        //         $data['message'] = 'Success';


        //     }else {

        //         $data['response'] = false; 
        //         $data['c'] = 'alert-danger';
        //         $data['message'] = 'Invalid Password'; 
        //     }
            
        // }else {
        //     $data['response'] = false ;
        //     $data['c'] = 'alert-danger';
        //     $data['message'] = 'Username Not Found'; 
        // }

        // return response()->json($data);
       
    }
}
