<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ClientOneFactory;
use Database\Factories\ClientTwoFactory;

class Client extends Model
{
    use HasFactory;

    protected $factory = [
        'ClientOneFactory' => ClientOneFactory::class,
        'ClientTwoFactory' => ClientTwoFactory::class,
    ];

    protected $fillable = [
        "client_type",
        "tradeName" ,
        "fullName",
        "gender" ,
        "phone",
        "phoneTwo",
        "address",
        "district",
        "city",
        "postalCode",
        "national_id" ,
        "dateOfBirth",
        "taxNumber" ,
        "registerNumber",
    ];
}
