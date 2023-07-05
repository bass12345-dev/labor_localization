<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstablishmentModel;

class EstablishmentController extends Controller
{
    public $establishment;

    public function __construct()
    {
        $this->establishment = new EstablishmentModel;
    }

    
    public function index(){

        $data['title'] = 'Establishments';
        return view('main.contents.establishments.establishment_content')->with($data);

       
       
        
    }


    public function add(){

        $data['title'] = 'Add Establishment';
        return view('main.contents.establishments.pages.add_page.add_establishment')->with($data);
    }





    public function store(Request $request){

        // $establishment = new EstablishmentModel;
        $count = EstablishmentModel::where('establishment_code', '=', $request->input('es_code'))->count();

        if($count == 0) {

        $this->establishment->establishment_code = 'ES-'. $request->input('es_code');
        $this->establishment->establishment_name = $request->input('es_name');
        $this->establishment->address = $request->input('es_address');
        $this->establishment->contact_number = $request->input('es_contact');
        $this->establishment->email_address = $request->input('es_email');
        $this->establishment->authorized_personnel = $request->input('es_authorized_personnel');
        $this->establishment->position = $request->input('es_position');
        $this->establishment->created_on = '2023-06-19 13:35:39';

        if($this->establishment->save()){

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
                'es_code'            => $row->establishment_code,
                'es_name'            => $row->establishment_name,
                'es_id'              => $row->establishment_id
               
            ];
        }
        return $data;

        
    }

    function delete(Request $request){


        if(is_array($request->input('id'))) {

                 
            foreach($request->input('id') as $row ) {

                $delete =  EstablishmentModel::where('establishment_id', $row)->delete();
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
