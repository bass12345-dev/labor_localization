<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index(Request $request){

        $data['title'] = 'Login';
        $data['id']    = $request->session()->get('user_id');
        return view('auth.login')->with($data);
    }

    public function verify(Request $request){
    
        $username = $request->input('username');
        $password = $request->input('password');

        $count = User::where('username', '=', $username)->count();

        $user = User::where('username', '=', $username)->first();

        if($count > 0){
           
            $user = User::where('username', '=', $username)->get()[0];

            if(Hash::check($password, $user->password)){
                
                $data['response'] = true;
                $data['c'] = 'alert-primary';
                $data['message'] = 'Success';
                $user_data = array(
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'isLoggedin' => True
                );

                $request->session()->put($user_data);

            }else {

                $data['response'] = false; 
                $data['c'] = 'alert-danger';
                $data['message'] = 'Invalid Password'; 
            }
            
        }else {
            $data['response'] = false ;
            $data['c'] = 'alert-danger';
            $data['message'] = 'Username Not Found'; 
        }

        return response()->json($data);
       
    }
}
