<?php

namespace Database\Seeders;

use App\Models\student;
use App\Models\teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;  
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        @schema::disableForeignKeyConstraints();
        student::truncate();
        Schema::enableForeignKeyConstraints();

        student::factory()->count(10)->create();
    }
}
