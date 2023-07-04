<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstablishmentModel;

class EstablishmentController extends Controller
{
    public function index(){

        $data['title'] = 'Establishments';
        return view('main.contents.establishments.establishment_content')->with($data);

       
       
        
    }


    public function add(){

        $data['title'] = 'Add Establishment';
        return view('main.contents.establishments.pages.add_page.add_establishment')->with($data);
    }





    public function store(Request $request){

        $establishment = new EstablishmentModel;
        $count = EstablishmentModel::where('establishment_code', '=', $request->input('es_code'))->count();

        if($count == 0) {

        $establishment->establishment_code = 'ES-'. $request->input('es_code');
        $establishment->establishment_name = $request->input('es_name');
        $establishment->address = $request->input('es_address');
        $establishment->contact_number = $request->input('es_contact');
        $establishment->email_address = $request->input('es_email');
        $establishment->authorized_personnel = $request->input('es_authorized_personnel');
        $establishment->position = $request->input('es_position');
        $establishment->created_on = '2023-06-19 13:35:39';

        if($establishment->save()){

            $data = array('message' => 'Added Succesfully' , 'response' => true , 'c' => 'alert-primary');
        }else {
            $data = array('message' => 'error', 'response' => false, 'c' => 'alert-danger');
        }


        }else{
            $data = array('message' => 'Duplicate Establishment Code', 'response' => false, 'c' => 'alert-danger');
        }

        return response()->json($data);
    }

    public function get(){
        $data = [];
        $establishment = EstablishmentModel::all()->sortBy("establishment_code");
        foreach($establishment as $row) {
            $data[] = [
                'es_code'             => $row->establishment_code,
                'es_name'            => $row->establishment_name,
               
            ];
        }
        return $data;

        
    }
}
