<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\ContractorsModel;

class ContractorsController extends Controller
{
    
    public function index(Request $request){
        $data['title'] = 'Contractors';
        return view('main.contents.contractors.contractors_content')->with($data);
    }


    public function add(){

        $data['title'] = 'Add Contractors';
        return view('main.contents.contractors.pages.add_page.add_contractors')->with($data);
    }



    public function store(Request $request){


         $rules = [
            'c_name' => 'required|string|min:3|max:255',
            'c_proprietor' => 'required|string|min:3|max:255',
            'c_address' => 'required|string|min:3|max:255',
            'c_contact_number' => 'required|string|min:3|max:255',
            'c_phone_owner' => 'required|string|min:3|max:255',
            'c_telephone_number' => 'required|string|min:3|max:255',
            'c_email' => 'required|string|email|max:255'
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect('contractors/add')
            ->withInput()
            ->withErrors($validator);
        }
        else{
            $data = $request->input();
            try{
                $contractor = new ContractorsModel;
                $contractor->contractor_name= $data['c_name'];
                $contractor->proprietor = $data['c_proprietor'];
                $contractor->address = $data['c_address'];
                $contractor->phone_number = $data['c_contact_number'];
                $contractor->number_owner_name   = $data['c_phone_owner'];
                $contractor->telephone_number   = $data['c_telephone_number'];
                $contractor->email_address   = $data['c_email'];
                $contractor->contractor_status   = 'active';
              





                $contractor->save();
                return redirect('/contractors/add')->with('status',"Insert successfully");
            }
            catch(Exception $e){
                return redirect('contractors/add')->with('failed',"operation failed");
            }
        }
    	
    }


    public function get(){

        $data = [];
        $items = ContractorsModel::all()->sortBy("contractor_name");
        foreach($items as $row) {
            $data[] = [
                'id'                    => $row->id,
                'contractor_name'       => $row->contractor_name,
                'proprietor'            => $row->proprietor,
                'address'               => $row->address,
                'phone_number'          => $row->phone_number != NULL ? $row->phone_number : '  ',
                'number_owner_name'     => $row->number_owner_name != NULL ? $row->number_owner_name : '  ',
                'telephone_number'      => $row->telephone_number != NULL ? $row->telephone_number : ' ',
                'email_address'         => $row->email_address != NULL ? $row->email_address : '  ',
                'contractor_status'     => $row->contractor_sta // 'status'             => $row->status
               
            ];
        }
        return response()->json($data);
        
    }

}
