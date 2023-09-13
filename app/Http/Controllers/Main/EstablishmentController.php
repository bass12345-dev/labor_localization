<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstablishmentModel;
use App\Models\SurveyModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class EstablishmentController extends Controller
{
    public $establishment;
    public $survey;
    public $establishment_table = 'establishments';
    public $survey_table        = 'survey';
    public $latest_year;

    public function __construct()
    {
        $this->establishment    = new EstablishmentModel;
        $this->survey           = new SurveyModel;
        $this->latest_year      = Carbon::now()->format('Y');
    }

    
    public function index(){

        $data['title']       = 'Establishments';
        $data['latest_year'] =  $this->latest_year;
        return view('main.contents.establishments.establishment_content')->with($data);

       
       
        
    }


    public function add(){

        $data['title'] = 'Add Establishment';
        return view('main.contents.establishments.pages.add_page.add_establishment')->with($data);
    }

    public function survey(){
        
        $data['title']          = 'Survey/Report';
        $data['latest_year']    =  $this->latest_year;
        $data['es_name']        = EstablishmentModel::where('establishment_id', '=', $_GET['es_id'])->first()->establishment_name;
        $data['survey_data']    = SurveyModel::where('es_id', '=', $_GET['es_id'])->first();

       
        return view('main.contents.establishments.pages.survey.survey')->with($data);
    }


    public function store_survey_local(Request $request){


        $items = array(

                        'local_permanent'          => $request->input('permanent'),
                        'local_probationary'       => $request->input('probationary'),
                        'local_contractual'        => $request->input('contractual'),
                        'local_project_based'      => $request->input('project_based'),
                        'local_seasonal'           => $request->input('seasonal'),
                        'local_jo'                 => $request->input('jo'),
                        'local_mgt'                => $request->input('mgt')
        );

        $update = DB::table('survey')
                    ->where('es_id', $request->input('es_id'))
                    ->where('year', $request->input('year'))
                    ->update($items);

        if ($update) {

             $data = array('message' => 'Updated Successfully' , 'response' => true );

        }else {

            $data = array('message' => 'Something Wrong/Data is not updated' , 'response' => false );


        }
       
       return response()->json($data);

    }




    public function store(Request $request){

        // $establishment = new EstablishmentModel;
        $count = EstablishmentModel::where('establishment_code', '=', $request->input('es_code'))->count();

        if($count == 0) {

        $this->establishment->establishment_code    =  $request->input('es_code');
        $this->establishment->establishment_name    = $request->input('es_name');
        $this->establishment->address               = $request->input('es_address');
        $this->establishment->contact_number        = $request->input('es_contact');
        $this->establishment->email_address         = $request->input('es_email');
        $this->establishment->authorized_personnel  = $request->input('es_authorized_personnel');
        $this->establishment->position              = $request->input('es_position');
        $this->establishment->created_on            = '2023-06-19 13:35:39';
        $this->establishment->status                = 'active';

        if($this->establishment->save()){

            $this->survey->es_id                        = $this->establishment->id;
            $this->survey->year                         = $this->latest_year;
            $this->survey->local_permanent              = 0;
            $this->survey->local_probationary           = 0;
            $this->survey->local_contractual            = 0;
            $this->survey->local_project_based          = 0;
            $this->survey->local_seasonal               = 0;
            $this->survey->local_jo                     = 0;
            $this->survey->local_mgt                    = 0;


            $this->survey->outside_permanent            = 0;
            $this->survey->outside_probationary         = 0;
            $this->survey->outside_contractual          = 0;
            $this->survey->outside_project_based        = 0;
            $this->survey->outside_seasonal             = 0;
            $this->survey->outside_jo                   = 0;
            $this->survey->outside_mgt                  = 0;
            $this->survey->save();

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
                'es_code'            => 'ES - '.$row->establishment_code,
                'es_name'            => $row->establishment_name,
                'es_id'              => $row->establishment_id,
                'es_contact'         => $row->contact_number != NULL ? $row->contact_number : '  ',
                'es_address'         => $row->address != NULL ? $row->address : '  ',
                'es_email'           => $row->email_address != NULL ? $row->email_address : ' ',
                'es_personnel'       => $row->authorized_personnel != NULL ? $row->authorized_personnel : '  ',
                'es_position'        => $row->position != NULL ? $row->position : '  ',
                'status'             => $row->status
               
            ];
        }
        return $data;

        
    }

    public function get_survey_data(Request $request){

    $type    =  $request->input('type');
    $year    =  $request->input('year');
    $es_id    =  $request->input('es_id');
    $local_survey = DB::table('survey')->where('es_id', $es_id)->where('year', $year)->first();
    return response()->json($local_survey);


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
