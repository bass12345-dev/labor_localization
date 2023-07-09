<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public $user;
    public function __construct()
    {
        $this->user = new User;
    }
    public function index(){

        $data['title'] = 'Users';
        return view('main.contents.users.users_content')->with($data);
    }

    public function add(){

        $data['title'] = 'Add User';
        return view('main.contents.users.pages.add_page.add_user')->with($data);
    }

    public function store(Request $request){

        $this->user->first_name =  $request->input('first_name');
        $this->user->middle_name =  $request->input('middle_name');
        $this->user->last_name =  $request->input('last_name');
        $this->user->extension =  $request->input('extension');
        $this->user->address =  $request->input('address');
        $this->user->contact_number =  $request->input('contact_number');
        $this->user->email =  $request->input('email');
        $this->user->username =  $request->input('username');
        $this->user->password =  Hash::make($request->input('password'));



        

        if($this->user->save()){

            $data = array('message' => 'Added Succesfully' , 'response' => true , 'c' => 'alert-primary');
        }else {
            $data = array('message' => 'error', 'response' => false, 'c' => 'alert-danger');
        }   

        return response()->json($data);
      
    }


    public function get(){
        $data = [];
        $users = User::all()->sortBy("id");
        foreach($users as $row) {
            $data[] = [
                'user_id'               => $row->id,
                'first_name'            => $row->first_name,
                'username'              => $row->username,
                'contact_number'        => $row->contact_number,
                'email'                 => $row->email,
                'address'               => $row->address,
                
               
            ];
        }
        return $data;

        
    }

    public function delete(Request $request){

        if(is_array($request->input('id'))) {

                 
            foreach($request->input('id') as $row ) {

                $delete =  User::where('id', $row)->delete();
                if($delete) {

                    $data = array('message' => 'Deleted Succesfully' , 'response' => 'true ');

                }else {
                    $data = array('message' => 'Error', 'response' => 'false');
                }

                echo json_encode($data);

            }

        }

    }
}
