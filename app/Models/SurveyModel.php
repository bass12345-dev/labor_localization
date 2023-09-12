<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyModel extends Model
{
    use HasFactory;

    protected $table = 'survey';

    protected $fillable = [

        'es_id',
        'year',

        'local_permanent',
        'local_probationary',
        'local_contractual',
        'local_project_based',
        'local_seasonal',
        'local_jo',
        'local_mgt',


        'outside_permanent',
        'outside_probationary',
        'outside_contractual',
        'outside_project_based',
        'outside_seasonal',
        'outside_jo',
        'outside_mgt',



        
        // Add more fields as needed
    ];

     public $timestamps = false;
}
