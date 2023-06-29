<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function index(){

        $data['title'] = 'Establishments';
        return view('main.contents.establishments.establishment_content')->with($data);
    }
}
