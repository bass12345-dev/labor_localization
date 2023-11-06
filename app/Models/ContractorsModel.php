<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractorsModel extends Model
{
    use HasFactory;

    protected $table = 'contractors';

    protected $fillable = [
        'contractor_name',
        'proprietor',
        'address',
        'phone_number',
        'number_owner_name',
        'telephone_number',
        'email_address',
        'contractor_status',
        



        
        // Add more fields as needed
    ];

    public $timestamps = false;
}
