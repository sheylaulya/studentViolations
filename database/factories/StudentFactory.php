<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;  
use Faker\Factory as faker;
use Illuminate\Support\Arr;
/**
 * 
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
           
        $faker = faker::create('id_ID');
        return [
            'nisn'=>$faker->randomNumber(9,true),
            'name'=>$faker->name(),
            'gender'=>$faker->randomElement(['female','male']),
            'address'=>$faker->address(),
            'email'=>$faker->email(),
            'pass'=>$faker->password(2, 6),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
    }
}
