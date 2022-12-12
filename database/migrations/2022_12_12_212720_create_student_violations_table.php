<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_violations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reports_id')->require();
            $table->foreign('reports_id')->references('id')->on('violation_reports')->onDelete('restrict');
            $table->unsignedBigInteger('student_id')->require();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_violations');
    }
};
