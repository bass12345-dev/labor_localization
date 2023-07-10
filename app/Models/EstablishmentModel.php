<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstablishmentModel extends Model
{
    use HasFactory;

    protected $table = 'establishments';

    protected $fillable = [
        'establishment_code',
        'establishment_name',
        'contact_number',
        'address',
        'email_address',
        'authorized_personnel',
        'position',
        'status',
        'created_on'



        
        // Add more fields as needed
    ];

    public $timestamps = false;
}
