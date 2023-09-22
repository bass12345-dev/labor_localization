<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    	print_r('asd');
    }

}
