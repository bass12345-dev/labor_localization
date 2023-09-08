<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackupDBController extends Controller
{
    public function index(Request $request){

        
        $data['title'] = 'Back Up Database';
        return view('main.contents.backupDB.backupDB_content')->with($data);
    }
}
