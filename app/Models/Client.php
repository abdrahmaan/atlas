<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;
use App\Models\Letter;

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


        /**
         * Get all of the comments for the Client
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function appointments()
        {
            return $this->hasMany(Appointment::class, 'client_id', 'id');
        }

        /**
         * Get all of the comments for the Client
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function letters()
        {
            return $this->hasMany(Letter::class, 'client_id', 'id');
        }
    
}
