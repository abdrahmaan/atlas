<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    use HasFactory;

    protected $fillable = [

        "tradeName" ,
        "fullName" ,
        "gender" ,
        "taxNumber" ,
        "registerNumber",
        "phone",
        "phoneTwo",
        "address",
        "district",
        "city",
        "postalCode",
    ];
}
