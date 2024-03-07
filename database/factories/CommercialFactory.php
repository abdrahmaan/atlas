<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commercial;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commercial>
 */
class CommercialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Commercial::class;

     public function definition()
     {
 
         
         return [
             "tradeName"  => $this->faker->company(),
             "fullName"  => $this->faker->name(),
             "gender"  => "Male",
             "taxNumber"  => $this->faker->randomNumber(7),
             "registerNumber"  => $this->faker->randomNumber(7),
             "phone"  => $this->faker->phoneNumber(),
             "phoneTwo"  => $this->faker->phoneNumber(),
             "address"  => $this->faker->streetAddress(),
             "district"  => $this->faker->randomElement(["الخبر","المدينة"]),
             "city"  => $this->faker->randomElement(["الرياض","جدة"]),
             "postalCode"  => $this->faker->randomNumber(6),
         ];
     }
}
