<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;  
use Faker\Factory as faker;
use Illuminate\Support\Arr;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'nipd'=>$faker->randomNumber(9,true),
            'name'=>$faker->name(),
            'gender'=>$faker->randomElement(['female','male']),
            'address'=>$faker->address(),
            'lesson'=>$faker->randomElement(['TJKT','BRF','PPLG','ANIMASI','TE']),
            'telp'=>$faker->randomNumber(9,true),
            'email'=>$faker->email(),
            'pass'=>$faker->password(2, 6),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
    }
}
