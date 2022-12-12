<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/teacher', [TeacherController::class,'index']);
Route::get('/teacher/add_data',[TeacherController::class,'create']);
Route::post('/teacher/add_data',[TeacherController::class,'store']);
Route::get('/teacher/update_data/{id}',[TeacherController::class,'edit']);
Route::put('/teacher/update_data/{id}',[TeacherController::class, 'update']);
Route::get('/teacher/detail/{id}',[TeacherController::class,'show']);
Route::delete('/teacher/destroy/{id}', [TeacherController::class, 'destroy']);

Route::get('/student', [StudentController::class,'index']);