<?php

namespace Database\Seeders;

use App\Models\teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;  
use Illuminate\Support\Facades\Schema;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        @schema::disableForeignKeyConstraints();
        teacher::truncate();
        Schema::enableForeignKeyConstraints();

        teacher::factory()->count(10)->create();
    }
}
